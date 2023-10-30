 <!--  Footer Start -->
 <div class="container-fluid">
        <footer class="py-3  bg-secondary-subtle fixed-bottom ">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index.php" class="nav-link px-2 ">Home</a></li>
            <li class="nav-item"><a href="personList.php" class="nav-link px-2">Person List</a></li>
            <li class="nav-item"><a href="foodList.php" class="nav-link px-2">Food List</a></li>
            <li class="nav-item"><a href="forms.php" class="nav-link px-2">Form List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Phone Number List</a></li>
            <li class="nav-item"><a href="phoneNumberList.php" class="nav-link px-2">Request List</a></li>
            <li class="nav-item"><a href="announcementList.php" class="nav-link px-2">Announcement List</a></li>
            <li class="nav-item"><a href="rss.php" class="nav-link px-2">News</a></li>
            <li class="nav-item"><a href="imageDisplay.php" class="nav-link px-2">Image Load</a></li>
          </ul>
          <p class="text-center text-body-secondary">© 2023 SeKaans Company</p>
        </footer>
      </div>
      <!--  Footer End -->
      


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
</html>