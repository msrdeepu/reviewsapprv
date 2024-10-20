 <style>
     .snackbar {
  background: linear-gradient(45deg, #6a11cb, #2575fc);
  box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.15);
  border-top-left-radius: 20px;
  border-top-right-radius: 20px;
  animation: slideUp 0.5s ease-out forwards;
  transition: opacity 0.3s ease, visibility 0.3s ease;
  opacity: 0; /* Initially hidden */
  visibility: hidden; /* Initially hidden */
}

.snack-item {
  color: #fff;
  text-decoration: none;
  transition: transform 0.3s ease, background-color 0.3s ease;
}

.snack-item i {
  font-size: 24px;
  color: #fff;
}

.snack-item p {
  margin: 0;
  font-size: 13px;
  color: #fff;
}

.snack-item:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  transform: translateY(-5px);
}

.snackbar .snack-item {
  padding: 10px 20px;
  border-radius: 20px;
}

@keyframes slideUp {
  from {
    transform: translateY(100%);
  }
  to {
    transform: translateY(0);
  }
}

.show-snackbar {
  opacity: 1;
  visibility: visible;
}

 </style>
 
 
 <div class="snackbar fixed-bottom">
    <div class="d-flex justify-content-around py-2">
      <a href="/" class="snack-item text-center">
        <i class="fa fas fa-home"></i>
        <p>Home</p>
      </a>
      <a href="#" class="snack-item text-center">
        <i class="fas fa-question-circle"></i>
        <p>Quizzes</p>
      </a>
      <a href="#" class="snack-item text-center">
        <i class="fas fa-blog"></i>
        <p>Blog</p>
      </a>
      <a href="#" class="snack-item text-center">
        <i class="fas fa-user"></i>
        <p>Profile</p>
      </a>
      <a href="#" class="snack-item text-center">
        <i class="fas fa-sign-out-alt"></i>
        <p>Logout</p>
      </a>
    </div>
  </div>