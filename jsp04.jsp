<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.sql.*, java.util.*" %>
<html>
<head>
    <title>Danh sách Độc giả</title>
</head>
<body>
    <h2>Danh sách Độc giả</h2>
    <table border="1">
        <tr>
            <th>Mã Độc Giả</th>
            <th>Họ Tên</th>
            <th>Đơn Vị Công Tác</th>
            <th>Tên Sách Mượn</th>
            <th>Số Lượng</th>
            <th>Giá Tiền</th>
            <th>Nhà Xuất Bản</th>
            <th>Năm Xuất Bản</th>
        </tr>
        <%
            try {
                Class.forName("com.mysql.jdbc.Driver");
                Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/OnTap", "root", "password");
                Statement stmt = conn.createStatement();
                ResultSet rs = stmt.executeQuery("SELECT * FROM DocGia");

                while(rs.next()) {
                    out.print("<tr>");
                    out.print("<td>" + rs.getInt("MaDocGia") + "</td>");
                    out.print("<td>" + rs.getString("HoTen") + "</td>");
                    out.print("<td>" + rs.getString("DonViCongTac") + "</td>");
                    out.print("<td>" + rs.getString("TenSachMuon") + "</td>");
                    out.print("<td>" + rs.getInt("SoLuong") + "</td>");
                    out.print("<td>" + rs.getDouble("GiaTien") + "</td>");
                    out.print("<td>" + rs.getString("NhaXuatBan") + "</td>");
                    out.print("<td>" + rs.getInt("NamXuatBan") + "</td>");
                    out.print("</tr>");
                }
                rs.close();
                stmt.close();
                conn.close();
            } catch(Exception e) {
                e.printStackTrace();
            }
        %>
    </table>
</body>
</html>
