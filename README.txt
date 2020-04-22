Website học tập online:
 -Mô tả chức năng:
  + Đăng ký, đăng nhập thành viên
  +Tham gia các khóa học miễn phí
  +Tìm kiếm khóa học
  +Rời khỏi khóa học
 -Mô tả cơ sở dữ liệu:
  +Gồm có 3 bảng user (người dùng), courses(các khóa học) và user_courses(các khóa học của người dùng)
  +user : user_id ,name ,e,mail,password
  +courses: course_id, course_name, type, description, image_link,youtube_link
  +user_courses: id, course_id, user_id
  +Các cột user_id và course_id của 2 bảng user và courses được nối với user-courses bằng khóa ngoại