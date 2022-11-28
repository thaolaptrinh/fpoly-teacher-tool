"use strict";

// Class definition
var KTTnsAddtn = (function () {
  // Shared variables
  const element = document.getElementById("kt_modal_add_tn");
  const form = element.querySelector("#kt_modal_add_tn_form");
  const modal = new bootstrap.Modal(element);
  var formData = new FormData();

  // Init add schedule modal
  var initAddtn = () => {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var validator = FormValidation.formValidation(form, {
      fields: {
        tn_noidung: {
          validators: {
            notEmpty: {
              message: "Nội dung không được để trống",
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

      formData.append(
        "tn_noidung",
        form.querySelector('[name="tn_noidung"]').value
      );
      formData.append(
        "tn_status",
        form.querySelector('[name="tn_status"]:checked:enabled').value
      );

      formData.append("is_add", true);

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
                .post(window.location.href, formData)
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

      // Swal.fire({
      //   text: "Bạn có chắc chắn muốn hủy bỏ?",
      //   icon: "warning",
      //   showCancelButton: true,
      //   buttonsStyling: false,
      //   confirmButtonText: "OK",
      //   cancelButtonText: "Quay lại",
      //   customClass: {
      //     confirmButton: "btn btn-primary",
      //     cancelButton: "btn btn-active-light",
      //   },
      // }).then(function (result) {
      //   if (result.value) {
      //     form.reset(); // Reset form
      //     modal.hide();
      //   } else if (result.dismiss === "cancel") {
      //     Swal.fire({
      //       text: "Biểu mẫu của bạn chưa bị hủy!.",
      //       icon: "error",
      //       buttonsStyling: false,
      //       confirmButtonText: "OK",
      //       customClass: {
      //         confirmButton: "btn btn-primary",
      //       },
      //     });
      //   }
      // });
    });

    // Close button handler
    const closeButton = element.querySelector(
      '[data-kt-tns-modal-action="close"]'
    );

    closeButton.addEventListener("click", (e) => {
      e.preventDefault();
      modal.hide();

      // Swal.fire({
      //   text: "Bạn có chắc chắn muốn hủy bỏ?",
      //   icon: "warning",
      //   showCancelButton: true,
      //   buttonsStyling: false,
      //   confirmButtonText: "OK",
      //   cancelButtonText: "Quay lại",
      //   customClass: {
      //     confirmButton: "btn btn-primary",
      //     cancelButton: "btn btn-active-light",
      //   },
      // }).then(function (result) {
      //   if (result.value) {
      //     form.reset(); // Reset form
      //     modal.hide();
      //   } else if (result.dismiss === "cancel") {
      //     Swal.fire({
      //       text: "Biểu mẫu của bạn chưa bị hủy!.",
      //       icon: "error",
      //       buttonsStyling: false,
      //       confirmButtonText: "OK",
      //       customClass: {
      //         confirmButton: "btn btn-primary",
      //       },
      //     });
      //   }
      // });
    });
  };

  return {
    // Public functions
    init: function () {
      initAddtn();
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTTnsAddtn.init();
});
