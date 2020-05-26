# Course-Website
<!-- Headings -->
![Markdown Logo](https://github.com/tekoham/Course-Website/blob/master/images/uet.png)
# BÁO CÁO BÀI TẬP LỚN CSDL
## TRANG WEB HỌC ONLINE
* Môn học: Cơ sở dữ liệu
* Mã lớp: INT2207 1
* Giáo viên: TS.Lê Hồng Hải
* Các thành viên trong nhóm:
    * Phạm Công Minh
    * Đào Trung Kiên
    * Nguyễn Hồng Thái
<!-- CONTENT -->
### <strong> I. MÔ TẢ DỰ ÁN </strong>
#### 1. Mô tả chung:
- Tham gia khoá học lập trình để nâng cao kỹ năng bản thân!
#### 2. Mô tả chức năng
a. Các chức năng của người dùng
|Chức năng|Mô tả|
|--------------|---------------|
|Đăng ký|Người dùng đăng ký tài khoản với : email , tên , mật khẩu |
|Đăng nhập|Người dùng đăng nhập với email và mật khẩu đã đăng ký|
|Tham gia khóa học|Người dùng có thể tham gia khóa học sau khi đã đăng nhập và ấn enroll me|
|Rời khóa học|Người dùng có thể rời khóa học bằng cách ấn leave course|

b. Các chức năng của Admin
|Chức năng|Mô tả|
|--------------|---------------|
|Xem cơ sở dữ liệu bảng khóa học|Sau khi đăng nhập bằng tài khoản admin , admin được xem bảng khóa học|
|Xóa khóa học|Admin có thể xóa khóa học bằng cách ấn vào biểu tượng xóa|
|Thêm khóa học|Admin có thể thêm khóa học bằng cách điền cách thông tin cần thiết và ấn nút add|
#### 3. Mô tả cơ sở dữ liệu
a. Ứng dụng của cơ sở dữ liệu
- Quản lý tài khoản người dùng
- Quản lý khóa học
- Quản lý giáo viên

b. Các yêu cầu về dữ liệu cần lưu trữ:
- Dữ liệu về tài khoản admin và tài khoản thường
- Dữ liệu về khóa học
- Dữ liệu về giáo viên
- Dữ liệu về các khóa học người dùng tham gia
### <strong> II. THIẾT KẾ CƠ SỞ DỮ LIỆU </strong>
#### Thiết kế mô hình thực thể ER
![ER](https://github.com/tekoham/Course-Website/blob/master/images/ER-diagram.png)

#### Mô hình cơ sở dữ liệu

![ER](https://github.com/tekoham/Course-Website/blob/master/images/designer.png)

### <strong>III. CÁC CÂU LỆNH TRUY VẤN SQL </strong>
* Kết nối đến cơ sở dữ liệu
    ~~~~sql
    $connect = mysqli_connect('localhost','id13279549_minh','Minh(1234567','id13279549_website_database');
    ~~~~
* Đăng ký:
    * Lấy bảng có email trùng với email người dùng đăng ký:
    ~~~~sql
    $result = mysqli_query($connect, "
                        SELECT email FROM user WHERE email = '$email'
                    ");
    ~~~~
    * Đếm số hàng của bảng trên (nếu > 0 tức là email đã có người khác đăng ký)
    ~~~~sql
    $num = mysqli_num_rows($result);
    ~~~~
    * Nếu biến $num trên = 0 , thêm tài khoản người dùng vào database (permission = 2 tức là user , 1 là admin)
    ~~~~sql
    $result = mysqli_query($connect, "
                        INSERT INTO user (name, email, password, permission_id) VALUE ('$name', '$email', '$password', 2)
                        ");
    ~~~~
* Đăng nhập:
    * Lấy bảng có email trùng với email người dùng nhập vào
    ~~~~sql
    $checkemail = mysqli_query($connect,"SELECT * FROM user WHERE email ='$email'; ");
    ~~~~
    * Đếm số hàng ở bảng trên , nếu > 0 tức là email đã được đăng ký 
    ~~~~sql
    $num = mysqli_num_rows($checkemail);
    ~~~~
    * Với mật khẩu , ta cũng có các bước kiểm tra như vậy (kiểm tra khi điều kiện về email đã đạt)
    ~~~~sql
    $checkPassword = mysqli_query($connect,"SELECT * FROM user WHERE email = '$email' and password = '$password';");               
    $num2 = mysqli_num_rows($checkPassword);
    $user = mysqli_fetch_array($checkPassword);
    ~~~~
* Trang chủ:
    * Lấy bảng loại khóa học (type) 
    ~~~~sql
    $course = mysqli_query($connect,"SELECT * FROM courses WHERE type='{$array1['type']}'; ");
    ~~~~
    * Lấy ra các khóa học ứng với từng loại khóa học để xuất ra trang chủ với 2 trường hợp người dùng tìm kiếm và không tìm kiếm 
    ~~~sql
    while($array1 = mysqli_fetch_array($title)){ 
                if ($search)
                {
                    $course = mysqli_query($connect,"SELECT * FROM courses WHERE type='{$array1['type']}' and course_name LIKE                                 '%$search%'; ");
                }
                else $course = mysqli_query($connect,"SELECT * FROM courses WHERE type='{$array1['type']}'; ");
    ~~~
    * Rà các khóa học để biết người dùng đang học (continue) hay chưa học (enroll) để in ra trang chủ  
    ~~~~sql
    while($array = mysqli_fetch_array($course)){
         $findcourse = mysqli_query($connect , "SELECT * FROM user_courses WHERE user_id = {$_SESSION['user_id']} AND course_id =                '{$array['course_id']}'");
         $numcourse = mysqli_num_rows($findcourse);
         $name ="";
         if ($numcourse > 0) $name = "Continue";
         else $name = "Enroll me";
    ~~~~
    * Khi người dùng ấn vào enroll thì dữ liệu được thêm vào database
    ~~~~sql
    $result = mysqli_query($connect, "INSERT INTO user_courses (`course_id`, `user_id`) VALUES ('{$_SESSION['course_id']}',                 '{$_SESSION['user_id']}')");
    ~~~~
* Trang chi tiết khóa học
    * Lấy thông tin chi tiết về khóa học và giáo viên dạy khóa học đó
    ~~~sql
    $course1 = mysqli_query($connect,"SELECT * FROM `courses` LEFT JOIN `teacher` 
         ON courses.teacher_id = teacher.teacher_id 
         WHERE course_id = '{$_SESSION['course_id']}'; ");
    $result = mysqli_fetch_array($course1);
    ~~~
    * -	Khi người dùng ấn nút “Leave course” , xóa dữ liệu
    ~~~sql
    $result = mysqli_query($connect, "INSERT INTO user_courses (`course_id`, `user_id`) 
    VALUES ('{$_SESSION['course_id']}', '{$_SESSION['user_id']}')");
    ~~~
* Trang admin
    * Lấy bảng để hiển thị bảng các khóa học
    ~~~sql
    $course = mysqli_query($connect,"SELECT * FROM courses ;");
    ~~~
    * Thêm khóa học
    ~~~sql 
    $result = mysqli_query($connect, "INSERT INTO courses (course_name, type, description, image_link, youtube_link, teacher_id) 
            VALUE ('$course_name', '$type', '$description', '$image_link', '$youtube_link', '$teacher_id');");
    ~~~
    * Xóa khóa học
    ~~~sql
    $result = mysqli_query($connect, "DELETE FROM courses WHERE course_id = $course_id ;");
    ~~~
    

    

