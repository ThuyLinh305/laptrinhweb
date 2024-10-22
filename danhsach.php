<html>
 <head>
 <title>Danh sách nhân viên</title>
 <style>
 body {
 font-family: Arial, sans-serif;
 }
 .container {
 width: 80%;
 margin: 0 auto;
 }
 h1 {
 text-align: center;
 }
 .add-employee {
 margin-bottom: 20px;
 } 
.add-employee a {
 text-decoration: none;
 color: blue;
 }
 table {
 width: 100%; 
border-collapse: collapse; 
} 
th, td {
 border: 1px solid black;
 padding: 8px;
 text-align: left;
 }
 th {
 background-color: #f2f2f2
 }
 .actions button {
 margin-right: 5px;
 }
 </style>
 </head>
 <body>
 <div class="container">
 <div class="add-employee">
 <a href="#">Thêm nhân viên</a>
 </div>
 <h1>Danh sách nhân viên</h1>
 <table>
 <thead>
 <tr>
 <th>First name</th>
 <th>Last name</th>
 <th>Role</th>
 <th>Departments</th>
 <th>Chọn thao tác</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>John</td>
 <td>Dover</td>
 <td>Manager</td>
 <td>Marketing</td>
 <td class="actions"> 
<button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 <tr>
 <td>Jane</td>
 <td>Smith</td>
 <td>Employee</td>
 <td>Marketing</td>
 <td class="actions">
 <button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 <tr>
 <td>Micheal</td>
 <td>Johnson</td>
 <td>Employee</td>
 <td>Marketing</td>
 <td class="actions">
 <button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 <tr>
 <td>Emily</td> 
<td>Brown</td>
 <td>Intern</td>
 <td>IT</td>
 <td class="actions">
 <button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 <tr>
 <td>Lani</td>
 <td>Loi</td>
 <td>Intern</td>
 <td>IT</td>
 <td class="actions">
 <button>Sửa</button>
 <button>Xóa</button>
 </td> 
</tr>
 <tr>
 <td>Le</td>
 <td>Nguyen</td>
 <td>Manager</td>
 <td>HR</td>
 <td class="actions">
 <button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 <tr>
 <td>Mai</td>
 <td>Le</td>
 <td>Intern</td>
 <td>HR</td>
 <td class="actions"> 
<button>Sửa</button>
 <button>Xóa</button>
 </td>
 </tr>
 </tbody>
 </table> 
</div>
 </body>
 </html>
