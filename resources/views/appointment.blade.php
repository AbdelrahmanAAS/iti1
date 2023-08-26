<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
  
</head>

<body>
    @include('admin.header')

    <form action="" method="POST">
        @csrf
        <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 he">
            <div class="about_right overlay">

                <div class="about_inner" style="font-family: 'Poppins', sans-serif;">
                    <!-- Section Title -->
                    <div style="font-size:40px;">Appointment
                        <hr>
                    </div>
                    <div>
                        <label for="name" class="lnr-phone-handset">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div>
                        <label for="phone">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div>
                        <label for="doctor_type">Department:</label>
                        <select id="doctor_type" name="doctor_type" required>
                            <option value="1">Urology</option>
                            <option value="2">Type 2</option>
                            <option value="3">Type 3</option>
                        </select>
                    </div>

                    <div>
                        <label for="time">Time:</label>
                        <input type="date" id="time" name="time" required>
                        <input type="time" id="time" name="time" required>
                    </div>

                    <div>
                        <label for="D">Desicraption:</label>
                        <input type="text" id="D" name="D" required>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
        </div>
    </form>


    @include('admin.footer')
</body>

</html>
