<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Coba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleuser.css">
  </head>
  <body>  
    <style>
      @import url("https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap");
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  align-items: center;
  background: #d8aa96;
  color: rgba(0, 0, 0, 0.8);
  display: grid;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  font-weight: 400;
  height: 100vh;
  justify-items: center;
  weight: 100vw;
}

.signup-container {
  display: grid;
  grid-template-areas: "left right";
  max-width: 900px;
}

.left-container {
  background: #807182;
  overflow: hidden;
  padding: 40px 0 0 0;
  position: relative;
  text-align: center;
  width: 300px;
}
.left-container h1 {
  color: rgba(0, 0, 0, 0.8);
  display: inline-block;
  font-size: 24px;
}
.left-container h1 i {
  background: #f7b1ab;
  border-radius: 50%;
  color: #807182;
  font-size: 24px;
  margin-right: 5px;
  padding: 10px;
  transform: rotate(-45deg);
}
.left-container .puppy {
  bottom: -5px;
  position: absolute;
  text-align: center;
}
.left-container .puppy:before {
  background: #807182;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0.4;
  position: absolute;
  width: 100%;
  z-index: 1;
}
.left-container img {
  filter: sepia(100%);
  width: 70%;
}

.right-container {
  background: #f9c7c2;
  display: grid;
  grid-template-areas: "." ".";
  width: 500px;
}
.right-container h1:nth-of-type(1) {
  color: rgba(0, 0, 0, 0.8);
  font-size: 28px;
  font-weight: 600;
}
.right-container .set {
  display: flex;
  justify-content: space-between;
  margin: 10px 0;
}
.right-container input {
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  height: 38px;
  line-height: 38px;
  padding-left: 5px;
}
.right-container input,
.right-container label {
  color: rgba(0, 0, 0, 0.8);
}
.right-container header {
  padding: 40px;
}
.right-container label,
.right-container input,
.right-container .pets-photo {
  width: 176px;
}
.right-container .pets-photo {
  align-items: center;
  display: grid;
  grid-template-areas: ". .";
}
.right-container .pets-photo button {
  border: none;
  border-radius: 50%;
  height: 38px;
  margin-right: 10px;
  outline: none;
  width: 38px;
}
.right-container .pets-photo button i {
  color: rgba(0, 0, 0, 0.8);
  font-size: 16px;
}
.right-container .pets-weight .radio-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.right-container footer {
  align-items: center;
  background: #fff;
  display: grid;
  padding: 5px 40px;
}
.right-container footer button {
  border: 1px solid rgba(0, 0, 0, 0.2);
  height: 38px;
  line-height: 38px;
  width: 100px;
  border-radius: 19px;
  font-family: "Montserrat", sans-serif;
}
.right-container footer #back {
  background: #fff;
  transition: 0.2s all ease-in-out;
}
.right-container footer #back:hover {
  background: #171a2b;
  color: white;
}
.right-container footer #next {
  background: #807182;
  border: 1px solid transparent;
  color: #fff;
}
.right-container footer #next:hover {
  background: #171a2b;
}

.pets-name label,
.pets-breed label,
.pets-birthday label,
.pets-gender label,
.pets-spayed-neutered label,
.pets-weight label {
  display: block;
  margin-bottom: 5px;
}

.radio-container {
  background: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  display: inline-block;
  padding: 5px;
}

.radio-container label {
  background: transparent;
  border: 1px solid transparent;
  border-radius: 2px;
  display: inline-block;
  height: 26px;
  line-height: 26px;
  margin: 0;
  padding: 0;
  text-align: center;
  transition: 0.2s all ease-in-out;
  width: 80px;
}

.radio-container input[type=radio] {
  display: none;
}

.radio-container input[type=radio]:checked + label {
  background: #f7b1ab;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
    </style>
    {{-- <div class="app-container">
      <div class="sidebar">
        <div class="sidebar-header">
          <div class="app-icon">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
          </div>
        </div>
        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" mviewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              <span>Home</span>
            </a>
          </li>
          <li class="sidebar-list-item active">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
              <span>Products</span>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
              <span>Statistics</span>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"/><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"/></svg>
              <span>Inbox</span>
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
              <span>Notifications</span>
            </a>
          </li>
        </ul>
        <div class="account-info">
          <div class="account-info-picture">
            <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="Account">
          </div>
          <div class="account-info-name">Monica G.</div>
          <button class="account-info-more">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
          </button>
        </div>
        </div>
        <div class="app-content">
          <div class="app-content-header">
            <h1 class="app-content-headerText">Dashboard</h1>
          </div>
          <div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-cherry">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">New Orders</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            3,243
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>12.5% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-blue-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Customers</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            15.07k
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                      <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                          <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                          <div class="mb-4">
                              <h5 class="card-title mb-0">Ticket Resolved</h5>
                          </div>
                          <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                              <h2 class="d-flex align-items-center mb-0">
                                  578
                              </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>10% <i class="fa fa-arrow-up"></i></span>
                            </div>
                          </div>
                          <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                          </div>
                        </div>
                    </div>
                </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card l-bg-orange-dark">
                            <div class="card-statistic-3 p-4">
                                <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Revenue Today</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0">
                                            $11.61k
                                        </h2>
                                    </div>
                                    <div class="col-4 text-right">
                                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                    </div>
                                </div>
                                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}


    <div class='signup-container'>
      <div class='right-container'>
        <header>
          <h1>Yay, puppies! Ensure your pup gets the best care!</h1>
          <div class='set'>
            <div class='pets-name'>
              <label for='pets-name'>Name</label>
              <input id='pets-name' placeholder="Pet's name" type='text'>
            </div>
            <div class='pets-photo'>
              <button id='pets-upload'>
                <i class='fas fa-camera-retro'></i>
              </button>
              <label for='pets-upload'>Upload a photo</label>
            </div>
          </div>
          <div class='set'>
            <div class='pets-breed'>
              <label for='pets-breed'>Breed</label>
              <input id='pets-breed' placeholder="Pet's breed" type='text'>
            </div>
            <div class='pets-birthday'>
              <label for='pets-birthday'>Birthday</label>
              <input id='pets-birthday' placeholder='MM/DD/YYYY' type='text'>
            </div>
          </div>
          <div class='set'>
            <div class='pets-gender'>
              <label for='pet-gender-female'>Gender</label>
              <div class='radio-container'>
                <input checked='' id='pet-gender-female' name='pet-gender' type='radio' value='female'>
                <label for='pet-gender-female'>Female</label>
                <input id='pet-gender-male' name='pet-gender' type='radio' value='male'>
                <label for='pet-gender-male'>Male</label>
              </div>
            </div>
            <div class='pets-spayed-neutered'>
              <label for='pet-spayed'>Spayed or Neutered</label>
              <div class='radio-container'>
                <input checked='' id='pet-spayed' name='spayed-neutered' type='radio' value='spayed'>
                <label for='pet-spayed'>Spayed</label>
                <input id='pet-neutered' name='spayed-neutered' type='radio' value='neutered'>
                <label for='pet-neutered'>Neutered</label>
              </div>
            </div>
          </div>
          <div class='pets-weight'>
            <label for='pet-weight-0-25'>Weight</label>
            <div class='radio-container'>
              <input checked='' id='pet-weight-0-25' name='pet-weight' type='radio' value='0-25'>
              <label for='pet-weight-0-25'>0-25 lbs</label>
              <input id='pet-weight-25-50' name='pet-weight' type='radio' value='25-50'>
              <label for='pet-weight-25-50'>25-50 lbs</label>
              <input id='pet-weight-50-100' name='pet-weight' type='radio' value='50-100'>
              <label for='pet-weight-50-100'>50-100 lbs</label>
              <input id='pet-weight-100-plus' name='pet-weight' type='radio' value='100+'>
              <label for='pet-weight-100-plus'>100+ lbs</label>
            </div>
          </div>
        </header>
        <footer>
          <div class='set'>
            <button id='back'>Back</button>
            <button id='next'>Next</button>
          </div>
        </footer>
      </div>
    </div>    
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



{{-- HAL COBA TODO --}}
@extends('templates.master')

@section('body')
<form action="/create/store" method="POST">
  
</form>
@endsection





{{-- Halaman  coba to do --}}
@extends('templates.master')

@section('body')
<h1 class="my-6 text-2xl font-semibold dark:text-slate-400">Add New To Do</h1>
    <form action="/create/store" method="POST">
        @csrf
        <div class="grid grid-cols-3 gap-8">
            <div>
                <h1 class="dark:text-slate-400 font-semibold mb-4">Title</h1>
                <input required name="title" type="text" placeholder="Type here" class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs" />
            </div>
            <div class="row-span-2">
                <h1 class="dark:text-slate-400 font-semibold mb-4">Description</h1>
                <textarea required class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 h-4/5 w-full max-w-xs" name="desc" id="" placeholder="Type description here"></textarea>
            </div>

            <div>
                <h1 class="dark:text-slate-400 font-semibold mb-4">Priority</h1>
                <select required class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs" name="priority" id="">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
            </div>
            <div>
                <h1 class="dark:text-slate-400 font-semibold mb-4">Due Date</h1>
                <input required name="due_date" id="tanggal" type="date" placeholder="Type here" class="input input-bordered rounded-sm dark:bg-neutral dark:border-slate-400 dark:text-slate-400 w-full max-w-xs" />
            </div>
            <div>
                <h1 class="dark:text-slate-400 font-semibold mb-4">Status</h1>
                <select required class="select select-bordered rounded-sm dark:bg-neutral dark:text-slate-400 w-full max-w-xs" name="stat" id="">
                    <option value="Not Done">Not Done</option>
                    <option value="To Do">To Do</option>
                    <option value="Done">Done</option>
                </select>
            </div>
        </div>
        <div class="flex gap-4 mt-8">
            <input class="btn border-slate-300 dark:btn-neutral dark:border-none" type="submit" value="Create">
            <a class="btn btn-outline btn-error" href="/">Cancel</a>
        </div>
    </form>

    <script>
        // Dapatkan elemen input tanggal
        var inputTanggal = document.getElementById('tanggal');

        // Dapatkan tanggal saat ini
        var tanggalSekarang = new Date();

        // Tambahkan 10 hari ke tanggal saat ini
        tanggalSekarang.setDate(tanggalSekarang.getDate() + 10);

        // Format tanggal ke dalam format yang dapat diterima oleh input tanggal
        var tanggalBatasMaksimum = tanggalSekarang.toISOString().split('T')[0];

        // Set batas minimum input tanggal ke tanggal saat ini
        inputTanggal.min = new Date().toISOString().split('T')[0];

        // Set batas maksimum input tanggal ke 10 hari ke depan
        inputTanggal.max = tanggalBatasMaksimum;
      </script>
@endsection

