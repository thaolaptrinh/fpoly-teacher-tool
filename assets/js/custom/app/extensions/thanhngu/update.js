"use strict";
const element = document.getElementById("kt_modal_update_tn");
const form = element.querySelector("#kt_modal_update_tn_form");
const modal = new bootstrap.Modal(element);
var formData_update = new FormData();
var formData_check = new FormData();

var initUpdatetnDetail = (id) => {
  formData_check.append("id", id);
  formData_update.append("id", id);
  formData_check.append("is_detail", true);


  

  axios
    .post(window.location.href, formData_check)
    .then((response) => {
      let data = response.data.data;
      let checkbox = form.querySelectorAll('[name="tn_status_update"]');

      checkbox.forEach((e) => {
        e.removeAttribute("checked");

        if (e.value == data.status) {
          e.setAttribute("checked", "checked");
        }
      });

      form.querySelector('[name="tn_noidung_update"]').value = data.noi_dung;
    })
    .catch((error) => {
      console.log(error);
    });
};

// Class definition
var KTtnsUpdatetn = (function () {
  // Shared variables

  // Init Update schedule modal

  var initUpdatetn = () => {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(form, {
      fields: {
        tn_noidung_update: {
          validators: {
            notEmpty: {
              message: "Nội dung kết không được để trống",
            },
          },
        },
      },

      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "",
          eleValidClass: "",
        }),
      },
    });

    // Submit button handler
    const submitButton = element.querySelector(
      '[data-kt-tns-modal-action="submit"]'
    );
    submitButton.addEventListener("click", (e) => {
      e.preventDefault();
      formData_update.append(
        "tn_noidung_update",
        form.querySelector('[name="tn_noidung_update"]').value
      );
      formData_update.append(
        "tn_status_update",
        form.querySelector('[name="tn_status_update"]:checked:enabled').value
      );

      formData_update.append("is_update", true);

      // Validate form before submit
      if (validator) {
        validator.validate().then(function (status) {
          if (status == "Valid") {
            // Show loading indication
            submitButton.setAttribute("data-kt-indicator", "on");

            // Disable button to avoid multiple click
            submitButton.disabled = true;

            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
            setTimeout(function () {
              // Remove loading indication
              submitButton.removeAttribute("data-kt-indicator");

              // Enable button
              submitButton.disabled = false;

              axios
                .post(window.location.href, formData_update)
                .then((response) => {
                  console.log(response);
                  Swal.fire({
                    text: response.data.message,
                    icon: response.data.status ? "success" : "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                      confirmButton: "btn btn-primary",
                    },
                    allowOutsideClick: !response.data.status,
                  }).then(function (result) {
                    if (result.isConfirmed && response.data.status) {
                      modal.hide();
                      window.location.reload();
                    }
                  });
                })
                .catch((error) => {
                  console.log(error);
                });
            }, 2000);
          } else {
            Swal.fire({
              text: "Xin lỗi, vui lòng thử lại.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "OK!",
              customClass: {
                confirmButton: "btn btn-primary",
              },
            });
          }
        });
      }
    });

    // Cancel button handler
    const cancelButton = element.querySelector(
      '[data-kt-tns-modal-action="cancel"]'
    );
    cancelButton.addEventListener("click", (e) => {
      e.preventDefault();
      modal.hide();
    });

    // Close button handler
    const closeButton = element.querySelector(
      '[data-kt-tns-modal-action="close"]'
    );

    closeButton.addEventListener("click", (e) => {
      e.preventDefault();
      modal.hide();
    });
  };

  return {
    // Public functions
    init: function () {
      initUpdatetn();
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTtnsUpdatetn.init();
});
