<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create a Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    " rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <script src="../resume-builder/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="../resume-builder/style.css">


  <meta name="theme-color" content="#712cf9">


</head>

<body>
  <div class="container">
    <h2 class="py-4">Resume Builder</h2>
    <section class="mb-4">

      <!--Section heading-->

      <div class="row">


        <div class="col-md-9 mb-md-0 mb-5 mx-auto">
          <form id="validForm" action="resume.php" method="POST" enctype="multipart/form-data">
            <div class="md-form mb-0">
              <label for="fullName" class="">Name:</label>
              <input type="text" name="fullName" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="phone_number" class="">Phone:</label>
              <input type="tel" name="phone_number" class="form-control">
            </div>

            <div class="md-form mb-0">
              <label for="subject" class="">Email:</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="website" class="">Website:</label>
              <input type="url" name="website" class="form-control">
            </div>
            <div class="md-form mb-0">
              <div class="md-form">
                <label for="summary">Summary:</label>
                <textarea type="text" name="summary" name="editor1" id="editor1" rows="4" required class="form-control md-textarea"></textarea>
              </div>
              <div class="md-form">
                <label for="exp1">Relevant Experience:</label>
                <textarea type="text" rows="4" name="exp1" name="editor2" id="editor2" md-textarea required class="form-control"></textarea>
              </div>
              <div class="md-form">
                <label for="exp2">Work Experience:</label>
                <textarea type="text" name="exp2" name="editor3" id="editor3" rows="4" md-textarea required class="form-control"></textarea>
              </div>
              <div class="md-form">
                <label for="education">Education & Certifications:</label>
                <textarea required type="text" name="education" name="editor4" id="editor4" rows="4" class="form-control md-textarea"></textarea>
              </div>
            </div>
            <div class="text-center text-md-left">
              <button name="submit" class="w-50 btn btn-lg btn-primary mt-4" type="submit">Create</button>
            </div>
          </form>


        </div>

      </div>

    </section>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js
        "></script>
  <script>
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="../resume-builder/validate.js"></script>

</body>

</html>