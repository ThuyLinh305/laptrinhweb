<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<html>
<head>
    <title>Thêm Độc Giả</title>
</head>
<body>
    <h2>Thêm Độc Giả</h2>
    <form action="themDocGiaXuLy.jsp" method="post">
        Họ Tên: <input type="text" name="HoTen" /><br>
        Đơn Vị Công Tác: <input type="text" name="DonViCongTac" /><br>
        Tên Sách Mượn: <input type="text" name="TenSachMuon" /><br>
        Số Lượng: <input type="number" name="SoLuong" /><br>
        Giá Tiền: <input type="text" name="GiaTien" /><br>
        Nhà Xuất Bản: <input type="text" name="NhaXuatBan" /><br>
        Năm Xuất Bản: <input type="text" name="NamXuatBan" /><br>
        <button type="submit" style="background-color: #08AB45; font-weight: bold;">Thêm Độc Giả</button>
    </form>
</body>
</html>
