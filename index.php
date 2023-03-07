<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create a Resume</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    " rel="stylesheet">
  <script src="../resume-builder/ckeditor/ckeditor.js"></script>


  <meta name="theme-color" content="#712cf9">


</head>

<body>
  <div class="container marketing">

    <!--Section: Contact v.2-->
    <section class="mb-4">

      <!--Section heading-->

      <div class="row">


        <div class="col-md-9 mb-md-0 mb-5 mx-auto">
          <form action="resume.php" method="POST" style="margin-top: 120px" enctype="multipart/form-data">
            <div class="md-form mb-0">
              <label for="name" class="">Name:</label>

              <input type="text" name="name" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="phone" class="">Phone:</label>

              <input type="tel" name="phone" class="form-control">
            </div>

            <div class="md-form mb-0">
              <label for="subject" class="">Email</label>

              <input type="text" name="email" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="url" class="">URL:</label>

              <input type="url" name="url" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="url2" class="">Linkedin:</label>

              <input type="url2" name="url2" class="form-control">
            </div>
            <div class="md-form mb-0">
              <label for="url3" class="">Github:</label>

              <input type="url3" name="url3" class="form-control">
            </div>
            <div class="md-form">
              <label for="summary">Summary:</label>
              <textarea type="text" name="summary" name="editor1" id="editor1" rows="4" class="form-control md-textarea"></textarea>
            </div>
            <div class="md-form">
              <label for="exp1">Relevant Experience:</label>
              <textarea type="text" rows="4" name="exp1" name="editor2" id="editor2" md-textarea class="form-control"></textarea>
            </div>
            <div class="md-form">
              <label for="exp2">Work Experience:</label>
              <textarea type="text" name="exp2" name="editor3" id="editor3" rows="4" md-textarea class="form-control"></textarea>
            </div>
            <div class="md-form">
              <label for="education">Education & Certifications:</label>
              <textarea type="text" name="education" name="editor4" id="editor4" rows="4" class="form-control md-textarea"></textarea>
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
</body>

</html>