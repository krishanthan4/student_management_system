# student_management_system
a student management system made with PHP, Javascript ,html ,SQL database and tailwindcss.

# Main actors in this application are as follows:
- Admin
- Teacher
- Student
- Academic Officer

  *...this application has portals for students,academic officers and teachers...*

# Main features of the actors are as follows:
## Admin features,
- Login
- Manage Administration
- Send invitations to teachers for registration in the system
- Send invitations to academic officers for registration in the system
- Manage Teachers
- Manage Academic officers
- Manage Students
- Check results
- Update profile
- logout

### Note:
•When sending the invitation to the teachers, you have to send a username, password and an
automatically generated unique code to the teacher’s email. Also, the automatically generated
unique code must expire after single use.•The admin has the right to assign teachers for a subject and for a grade in managing the
teacher’s section and Teachers should not be able to change them.
•Registration of the academic officer’s process should be same as the teacher’s registration
process

## Teacher features:
- Log in
- Add lesson notes
- Add new assignments
- View submitted answer sheets
- Add assignment marks
- Update profile
- Log out

### Note:
•When logging in to the system for the first time, teachers have to add the username, password
and the verification code sent by the admin.
•
•After that the teacher’s status should be changed as a verified teacher.
When adding marks for the assignments, teachers should not release them directly to the
students. Teachers should submit the marks to the academic officer first.

## Student features:
- Log in
- Download assignments
- View lesson notes
- Upload answers
- Update profile
- Log out

### Note:
•When logging in to the system for the first time, students have to add the verification code sent
by the academic officer to verify their account.
•After that, the student’s status should be changed as a verified student.

## Academic Officers features:
- Log in
- Register students and send verification code to them
- View assignment marks released by the teacher
- Release marks to the students
- Update profile
- Log out

### Note:
•When logging in to the system for the first time, academic officers also have to add the
username, password and the verification code sent by the admin.
•After that the student’s status should be changed as a verified academic officer

End...
