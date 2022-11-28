// Class definition

var KTSigninGeneral = (function () {
  // Elements
  var form;
  var submitButton;
  var validator;
  var formData;

  // Handle form
  var handleForm = function (e) {
    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    validator = FormValidation.formValidation(form, {
      fields: {
        email: {
          validators: {
            regexp: {
              regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
              message: "Địa chỉ emal không hợp lệ",
            },
            notEmpty: {
              message: "Email không được để trống",
            },
          },
        },
        password: {
          validators: {
            stringLength: {
              min: 8,
              message: "Mật khẩu từ 8 ký tự trở lên",
            },
            notEmpty: {
              message: "Mật khẩu không được để trống",
            },
          },
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "", // comment to enable invalid state icons
          eleValidClass: "", // comment to enable valid state icons
        }),
      },
    });

    // Handle form submit
    submitButton.addEventListener("click", function (e) {
      // Prevent button default action
      e.preventDefault();

      formData.append("email", form.querySelector('[name="email"]').value);
      formData.append(
        "password",
        form.querySelector('[name="password"]').value
      );

      let email = formData.get("email");
      let password = formData.get("password");
      // Validate form
      validator.validate().then(function (status) {
        if (status == "Valid") {
          // Show loading indication
          submitButton.setAttribute("data-kt-indicator", "on");

          // Disable button to avoid multiple click
          submitButton.disabled = true;

          // Simulate ajax request
          setTimeout(function () {
            // Hide loading indication
            submitButton.removeAttribute("data-kt-indicator");

            // Enable button
            submitButton.disabled = false;

            axios
              .post(`${base_url + "auth/login"}`, formData)
              .then((response) => {
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
                    form.querySelector('[name="email"]').value = "";
                    form.querySelector('[name="password"]').value = "";
                    var redirectUrl = form.getAttribute("data-kt-redirect-url");
                    if (redirectUrl) {
                      location.href = redirectUrl;
                    }
                  }
                });
              })
              .catch((error) => {
                console.log(error);
              });

            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
          }, 2000);
        } else {
          // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/
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
    });
  };

  // Public functions
  return {
    // Initialization
    init: function () {
      form = document.querySelector("#kt_sign_in_form");
      submitButton = document.querySelector("#kt_sign_in_submit");
      formData = new FormData();
      handleForm();
    },
  };
})();

// On document ready
KTUtil.onDOMContentLoaded(function () {
  KTSigninGeneral.init();
});
