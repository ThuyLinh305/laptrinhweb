<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.sql.*" %>
<html>
<head>
    <title>Xử lý Sửa Độc Giả</title>
</head>
<body>
    <%
        int maDocGia = Integer.parseInt(request.getParameter("MaDocGia"));
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
            String sql = "UPDATE DocGia SET HoTen = ?, DonViCongTac = ?, TenSachMuon = ?, SoLuong = ?, GiaTien = ?, NhaXuatBan = ?, NamXuatBan = ? WHERE MaDocGia = ?";
            PreparedStatement stmt = conn.prepareStatement(sql);
            stmt.setString(1, hoTen);
            stmt.setString(
