
![Screenshot 2025-02-25 082151](https://github.com/user-attachments/assets/9752c45c-0410-4b36-8dd5-563a3f5658b7)
# Quản lý Khóa học và Sinh viên

Dự án này giúp quản lý thông tin về các khóa học, giáo viên, lớp học, sinh viên, việc đăng ký khóa học và các khoản thanh toán của sinh viên. Các bảng cơ sở dữ liệu và mối quan hệ giữa chúng được mô tả rõ ràng trong hệ thống này.

## Các Bảng

### **COURSE**
Chứa thông tin về các khóa học được cung cấp, bao gồm các thông tin như tên khóa học, mô tả, thời gian, v.v.

### **TEACHER**
Chứa thông tin về các giáo viên, bao gồm tên, email, và các chi tiết liên quan.

### **BATCH**
Chứa thông tin về các lớp học, như tên lớp, lịch học, giáo viên giảng dạy, v.v.

### **STUDENT**
Chứa thông tin về các sinh viên, bao gồm tên, email, ngày sinh, và các thông tin cá nhân khác.

### **ENROLLMENT**
Chứa thông tin về việc sinh viên đăng ký tham gia khóa học, bao gồm thông tin sinh viên và khóa học họ đã đăng ký.

### **PAYMENT**
Chứa thông tin về các khoản thanh toán của sinh viên cho các khóa học đã đăng ký.

## Mối Quan Hệ Giữa Các Bảng

1. **COURSE** có thể có nhiều **BATCH** (một khóa học có thể có nhiều lớp).
2. **TEACHER** có thể dạy nhiều **COURSE** (một giáo viên có thể giảng dạy nhiều khóa học).
3. **BATCH** có thể có nhiều **ENROLLMENT** (một lớp học có thể có nhiều sinh viên đăng ký).
4. **STUDENT** có thể có nhiều **ENROLLMENT** (một sinh viên có thể đăng ký nhiều khóa học).
5. **ENROLLMENT** có thể có nhiều **PAYMENT** (một sinh viên có thể thanh toán nhiều lần cho các khóa học).

## Cách Sử Dụng

1. **Tạo Cơ Sở Dữ Liệu:**
   - Tạo các bảng được mô tả ở trên trong hệ quản trị cơ sở dữ liệu của bạn.
   
2. **Nhập Dữ Liệu Mẫu:**
   - Nhập dữ liệu mẫu vào các bảng để kiểm tra hệ thống.
   
3. **Sử Dụng SQL:**
   - Sử dụng các câu truy vấn SQL để lấy thông tin, quản lý và cập nhật dữ liệu trong hệ thống.

Ví dụ:
   - Lấy danh sách các khóa học mà một sinh viên đã đăng ký:
     ```sql
     SELECT course_name
     FROM COURSE
     INNER JOIN ENROLLMENT ON COURSE.course_id = ENROLLMENT.course_id
     WHERE ENROLLMENT.student_id = [Student_ID];
     ```

## Đóng Góp

Bạn có thể đóng góp vào dự án này bằng các cách sau:

- Báo cáo lỗi (Bug Reports).
- Đề xuất tính năng mới (Feature Requests).
- Gửi pull request với các cải tiến (Pull Requests).

## Cảm Ơn

Cảm ơn bạn đã tham gia và đóng góp cho dự án này. Hy vọng dự án sẽ giúp bạn và cộng đồng phát triển các ứng dụng quản lý khóa học và sinh viên một cách hiệu quả!


