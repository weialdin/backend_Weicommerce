# WeiCommerce Backend by Ahmad Aminudin

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![WeiCommerce Backend](https://github.com/user-attachments/assets/de0b9842-249c-48b7-b1c5-0325b96bf3f8)

## Tentang WeiCommerce Backend

**WeiCommerce Backend** adalah REST API yang saya rancang menggunakan framework **Laravel 11** untuk mendukung kebutuhan aplikasi e-commerce. API ini memungkinkan pengiriman dan penerimaan data antara **Frontend** (dibangun menggunakan Vue.js) dan **Backend**. Fitur utama yang tersedia meliputi:

- **Menampilkan Data**: Mengambil daftar data dari database.
- **Menambahkan Data**: Menyimpan data baru ke dalam database.
- **Mengedit Data**: Memperbarui data yang sudah ada.
- **Menghapus Data**: Menghapus data dari database.

### Konfigurasi Frontend dan Backend

Agar Frontend dan Backend dapat berkomunikasi dengan baik, diperlukan beberapa pengaturan:

- **CORS**: Konfigurasikan CORS di Laravel untuk mengizinkan akses lintas domain.
- **Axios**: Gunakan Axios di Vue.js untuk mengirimkan permintaan HTTP ke API Backend.

Untuk melihat repository Frontend aplikasi ini, silakan kunjungi [WeiCommerce Frontend](https://github.com/weialdin/WeiCommerce_FrontEnd).
