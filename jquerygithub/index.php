<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <h1 class="bg-dark p-2 text-center text-white">PHP OOP CRUD USING BOOTSTRAP MODAL AND AJAX </h1>

     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Student
</button>

<!-- Modal -->
<div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Student Info</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <input type="text" class="form-control" placeholder="Enter Name" id="user_name"> 
         <input type="email" class="form-control" placeholder="Enter Email" id="user_email"> 
         <input type="text" class="form-control" placeholder="Enter Dept" id="user_dept"> 
        <select name="" id="user_section" class="form-control">
            <option value="0">Select Section</option>
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
        </select>
        <input type="hidden" id="hidden_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="TextTitle" onclick="OnSaveUpdate()">Save </button>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Dept</th>
                    <th>Section</th>
                </thead>
                <tbody id="result">

                </tbody>
            </table>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>