"use strict";

// Class definition
var KTLAdd = (function () {
  // Shared variables

  var initAdd = (element_text, form_text, fields, formData_text) => {
    const element = document.getElementById(element_text);
    if (!element) {
      return;
    }

    const form = element.querySelector(form_text);
    const modal = new bootstrap.Modal(element);
    var formData = new FormData();

    var validator = FormValidation.formValidation(form, {
      fields: fields,
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "",
          eleValidClass: "",
        }),
      },
    });

    const submitButton = element.querySelector(
      '[data-kt-modal-action="submit"]'
    );
    submitButton.addEventListener("click", (e) => {
      e.preventDefault();

      formData_text.forEach((element) => {
        formData.append(
          element,
          form.querySelector(`[name="${element}"]`).value
        );
      });

      formData.append("is_add", true);

      if (validator) {
        validator.validate().then(function (status) {
          if (status == "Valid") {
            submitButton.setAttribute("data-kt-indicator", "on");

            submitButton.disabled = true;

            setTimeout(function () {
              submitButton.removeAttribute("data-kt-indicator");

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
      '[data-kt-modal-action="cancel"]'
    );
    cancelButton.addEventListener("click", (e) => {
      e.preventDefault();
      modal.hide();
    });

    // Close button handler
    const closeButton = element.querySelector('[data-kt-modal-action="close"]');

    closeButton.addEventListener("click", (e) => {
      e.preventDefault();
      modal.hide();
    });
  };

  return {
    // Public functions
    init: function () {
      // loại điểm
      var element = "kt_modal_add";
      var form = "#kt_modal_add_form";
      var fields = [],
        formData = [];

      switch (page_target) {
        case "loai-diem": {
          fields = {
            ten_diem: {
              validators: {
                notEmpty: {
                  message: "Tên điểm không được để trống",
                },
              },
            },
          };
          formData = [
            {
              name: "ten_diem",
            },
          ];
          break;
        }
        case "loai-lop": {
          fields = {
            id_khoa: {
              validators: {
                notEmpty: {
                  message: "Khóa học không được để trống",
                },
              },
            },
            ten_lop: {
              validators: {
                notEmpty: {
                  message: "Tên lớp không được để trống",
                },
              },
            },
            mo_ta: {
              validators: {
                notEmpty: {
                  message: "Mô tả không được để trống",
                },
              },
            },
          };

          formData = ["ten_lop", "id_khoa", "mo_ta"];

          break;
        }
        case "khoa-hoc": {
          fields = {
            ten_khoa: {
              validators: {
                notEmpty: {
                  message: "Tên khóa không được để trống",
                },
              },
            },
            thu_tu: {
              validators: {
                notEmpty: {
                  message: "Thứ tự không được để trống",
                },
              },
            },
          };

          formData = ["ten_khoa", "thu_tu"];
          break;
        }

        case "hoc-ky": {
          fields = {
            ten_hocky: {
              validators: {
                notEmpty: {
                  message: "Tên học kỳ không được để trống",
                },
              },
            },
            thu_tu: {
              validators: {
                notEmpty: {
                  message: "Thứ tự không được để trống",
                },
              },
            },
          };

          formData = ["ten_hocky", "thu_tu"];
          break;
        }

        default: {
          return;
        }
      }

      initAdd(element, form, fields, formData);
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTLAdd.init();
});
