<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.sql.*" %>
<html>
<head>
    <title>Xử lý Thêm Độc Giả</title>
</head>
<body>
    <%
        String hoTen = request.getParameter("HoTen");
        String donViCongTac = request.getParameter("DonViCongTac");
        String tenSachMuon = request.getParameter("TenSachMuon");
        int soLuong = Integer.parseInt(request.getParameter("SoLuong"));
        double giaTien = Double.parseDouble(request.getParameter("GiaTien"));
        String nhaXuatBan = request.getParameter("NhaXuatBan");
        int namXuatBan = Integer.parseInt(request.getParameter("NamXuatBan"));

        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/OnTap", "root", "password");
            String sql = "INSERT INTO DocGia (HoTen, DonViCongTac, TenSachMuon, SoLuong, GiaTien, NhaXuatBan, NamXuatBan) VALUES (?, ?, ?, ?, ?, ?, ?)";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setString(1, hoTen);
            stmt.setString(2, donViCongTac);
            stmt.setString(3, tenSachMuon);
            stmt.setInt(4, soLuong);
            stmt.setDouble(5, giaTien);
            stmt.setString(6, nhaXuatBan);
            stmt.setInt(7, namXuatBan);
            stmt.executeUpdate();
            stmt.close();
            conn.close();
            response.sendRedirect("hienThiDocGia.jsp");
        } catch(Exception e) {
            e.printStackTrace();
        }
    %>
</body>
</html>
