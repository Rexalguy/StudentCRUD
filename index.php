<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="h4 mb-0">STUDENT REGISTER</h1>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
                                Add Student
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered align-middle mb-0">
                                <thead class="table-dark">
                                    <tr>
                                        <th style="width: 90px;">ID</th>
                                        <th>Full Name</th>
                                        <th>Course</th>
                                        <th style="width: 260px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>STU-001</td>
                                        <td>Jane Doe</td>
                                        <td>Computer Science</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success flex-fill">Edit</button>
                                                <button type="button" class="btn btn-danger flex-fill">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>STU-002</td>
                                        <td>John Smith</td>
                                        <td>Business Admin</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success flex-fill">Edit</button>
                                                <button type="button" class="btn btn-danger flex-fill">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>STU-003</td>
                                        <td>Maria Garcia</td>
                                        <td>Information Technology</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-success flex-fill">Edit</button>
                                                <button type="button" class="btn btn-danger flex-fill">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="studentModalLabel">Add Student</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="studentId" class="form-label">Student ID</label>
                            <input type="text" class="form-control" id="studentId" placeholder="e.g. STU-004">
                        </div>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                        </div>
                        <div class="mb-3 mb-0">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" placeholder="Enter course">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Student</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>