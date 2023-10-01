<style>

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: left;
    }
    .input-group{
      margin-top:20px;
    }
    .form-group {
      margin-top:20px;
      display: inline-flex;
      float:right;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <div class="container">
    <h2>Sign in</h2>
    <form action="process-login.phpn  " method="POST">
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2"><i class="fa-solid fa-user"></i></span>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="username"  aria-describedby="inputGroupPrepend2" required>
      </div>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2"><i class="fa-solid fa-key"></i></span>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="password"  aria-describedby="inputGroupPrepend2" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
         <hr>
      </div>


      <div class="forget m-98">
        <p>Khong co tai khoan? <span>Dang nhap</span></p>
      </div>
    </form>
  </div>