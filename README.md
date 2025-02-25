
![Screenshot 2025-02-25 082151](https://github.com/user-attachments/assets/9752c45c-0410-4b36-8dd5-563a3f5658b7)
## Giải thích Bảng

* **COURSE**: Chứa thông tin về các khóa học được cung cấp.
* **TEACHER**: Chứa thông tin về giáo viên.
* **BATCH**: Chứa thông tin về các lớp học.
* **STUDENT**: Chứa thông tin về sinh viên.
* **ENROLLMENT**: Chứa thông tin về việc đăng ký khóa học của sinh viên.
* **PAYMENT**: Chứa thông tin về các khoản thanh toán của sinh viên.

## Mối quan hệ

* Một **COURSE** có thể có nhiều **BATCH**.
* Một **TEACHER** có thể dạy nhiều **COURSE**.
* Một **BATCH** có thể có nhiều **ENROLLMENT**.
* Một **STUDENT** có thể có nhiều **ENROLLMENT**.
* Một **ENROLLMENT** có thể có nhiều **PAYMENT**.

## Cách sử dụng

1.  Tạo cơ sở dữ liệu với các bảng được mô tả ở trên.
2.  Nhập dữ liệu mẫu vào các bảng.
3.  Sử dụng SQL để truy vấn và quản lý dữ liệu.

## Đóng góp

Bạn có thể đóng góp vào dự án này bằng cách:

* Báo cáo lỗi.
* Đề xuất tính năng mới.
* Gửi pull request với các cải tiến.
