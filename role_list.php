<html lang="vi">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Đăng Nhập</title>
 <style>
 body {
 font-family: Arial, sans-serif;
 background-color: #f0f0f0; 
display: flex; 
justify-content: center; 
align-items: center; 
height: 100vh;
 margin: 0;
 }
 .login-container {
 background-color: white; 
padding: 20px; 
border-radius: 10px;
 box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 width: 300px;
 text-align: center;
 }
 .login-container h2 { 
margin-bottom: 20px;
 font-size: 24px;
 color: #333; 
}
 .login-container input[type="text"], .login-container input[type="password"] {
 width: calc(100% - 20px);
 padding: 10px;
 margin-bottom: 10px;
 border: 1px solid #ccc;
 border-radius: 5px;
 font-size: 14px; 
}
 .login-container button {
 width: 100%; 
padding: 10px;
 background-color: #007bff;
 border: none;
 border-radius: 5px;
 color: white;
 font-size: 16px; 
cursor: pointer;
 }
 .login-container button:hover {
 background-color: #0056b3;
 }
 .login-info {
 margin-top: 20px;
 font-size: 14px;
 color: #666; 
text-align: left;
 }
 </style>
 </head>
 <body>
 <div class="login-container">
 <h2>Đăng Nhập</h2>
 <input type="text" id="username" placeholder="Tên đăng nhập">
 <input type="password" id="password" placeholder="Mật khẩu">
 <button onclick="login()">Đăng Nhập</button>
 <div class="login-info">
 <p>Thông tin đăng nhập:</p>
 <p>username: admin - password: admin123</p>
 <p>username: employee - password: employee123</p> 
</div>
 </div>
 <script> function login() { const username = document.getElementById('username').value; const password = document.getElementById('password').value; if ((username === 'admin' && password === 'admin123') || (username === 'employee' && password === 'employee123')) { window.location.href = 'Admin.php';
 { alert('Tên đăng nhập hoặc mật khẩu không đúng!'); } }}
 </script>
 </body>
 </html>