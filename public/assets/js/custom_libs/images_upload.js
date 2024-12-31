function initializeFileUploader(
  dropzoneSelector,
  uploadUrl,
  baseUrl,
  maxFiles,
  imageParamId,
  acceptedFiles,
  additionalParams
) {
  Dropzone.autoDiscover = false;
  document.addEventListener("DOMContentLoaded", function () {
    var myDropzone = new Dropzone(dropzoneSelector, {
      maxFiles: maxFiles,
      paramName: "cover_image",
      acceptedFiles: acceptedFiles,
      addRemoveLinks: true,
      url: uploadUrl,
      params: additionalParams,
      dictInvalidFileType: "You can't upload files of this type.",
      init: function () {
        this.on("error", function (file, errorMessage) {
          $(imageParamId)
            .next(imageParamId + "-error")
            .remove();
          if (
            typeof errorMessage === "string" &&
            errorMessage.indexOf("You can't upload files of this type") !== -1
          ) {
            $(imageParamId).after(
              '<p class="text_danger">Please upload an image file (JPEG, PNG, JPG)</p>'
            );
            this.removeFile(file);
          }
        });
        this.on("maxfilesexceeded", function (file) {
          this.removeFile(file);
          $(imageParamId).next(".text_danger").remove();
          $(imageParamId)
            .next(imageParamId + "-error")
            .remove();
          if (maxFiles == 1) {
            $(imageParamId).after(
              "<p class='text_danger'>Single image is allowed, remove the previously selected to add new</p>"
            );
          } else {
            $(imageParamId).after(
              "<p class='text_danger'>" +
              maxFiles +
              " images are allowed, remove the previously selected to add new</p>"
            );
          }
        });
        this.on("removedfile", function (file) {
          var imgElement = document.querySelector(dropzoneSelector + " .previously_selected_image");
          if (imgElement) {
            imgElement.remove();
          }
          if (this.getAcceptedFiles().length < maxFiles) {
            enableDropzone(this, maxFiles, imageParamId);
          }
        });
      },
      method: "post",
      success: function (file, response) {
        response = JSON.parse(response);
        console.log(response);
        console.log(response.encoded_name);
        $(imageParamId).val("");
        $(imageParamId).next(".text_danger").remove();
        $(imageParamId)
          .next(imageParamId + "-error")
          .remove();
        if (response.encoded_name != "") {
          var images = $(imageParamId).val();
          if (images != "") {
            images = images;
          } else {
            images = response.encoded_name;
          }
          $(imageParamId).val(images);
        } else {
          this.removeAllFiles();
          $(imageParamId).val("");
          $(imageParamId).after(
            '<p class="text_danger">Please upload an image file (JPEG, PNG, JPG)</p>'
          );
        }
      },
      error: function (file, response) {
        $(imageParamId).next(".text_danger").remove();
        $(imageParamId)
          .next(imageParamId + "-error")
          .remove();
        if (response.error && response.errors) {
          console.log("in error");
          $(imageParamId).val("");
          this.removeAllFiles();
          $.each(response.errors, function (field, message) {
            $(imageParamId).after('<p class="text_danger">' + message + "</p>");
          });
        }
      },
    });
  });
  function disableDropzone(dropzoneInstance, maxFiles, imageParamId) {
    dropzoneInstance.disable();
    $(imageParamId).next(".text_danger").remove();
  }
  function enableDropzone(dropzoneInstance) {
    dropzoneInstance.enable();
    $(imageParamId).next(".text_danger").remove();
    $(imageParamId)
      .next(imageParamId + "-error")
      .remove();
    $(imageParamId).val("");
  }
}