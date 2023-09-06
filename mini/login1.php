<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <section class="form-login">
        <div class="container">
          <h2> <i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
          <form method="POST" action="detail.html">
            <div class="mb-3">
              <label for="username" class="form-label">ชื่อเข้าระบบ</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">รหัสผ่าน</label>
              <input type="password" class="form-control" id="password" name="password" required>
              <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button> 
            <button type="reset" class="btn btn-warning">ล้างข้อมูล</button> 
      
          </form>
        </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
      </section>
</html>
