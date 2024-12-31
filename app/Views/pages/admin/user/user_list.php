<?= $this->extend('all_template/layout') ?>
<?= $this->section('main_content') ?>
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="text-primary fw-bold mb-4">User List</h2>
        </div>
        <div class="table-responsive hr_list_table">
            <?php if (session()->get('errors')) : ?>
                <div class="alert alert-danger">
                    <p><?php echo session()->get('errors') ?></p>
                </div>
            <?php endif; ?>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success">
                    <p><?php echo session()->get('success') ?></p>
                </div>
            <?php endif; ?>
            <div class="row mb-2">
                <!-- search filter  -->
                <div class="col-lg-4 col-md-3">
                    <label class="form-label passenger_form_label mb-1">Search</label>
                    <input type="search" class="form-control passenger_form_input rounded-pill search_product" placeholder="Search by name or cnic no.">
                </div>
                <!-- Course Wise filter  -->
                <div class="col-lg-3 col-md-3">
                    <label class="form-label passenger_form_label mb-1">Roles</label>
                    <select class="form-select passenger_form_select_input passenger_form_input rounded-pill all_category bg-white">
                        <option selected value="0">Select any roles</option>
                        <option value="">1</option>
                    </select>
                </div>
                <!-- Category filter  -->
                <div class="col-lg-3 col-md-3">
                    <label class="form-label passenger_form_label mb-1">Status</label>
                    <select class="form-select passenger_form_select_input passenger_form_input rounded-pill all_category bg-white">
                        <option selected value="0">Select user status</option>
                        <option value="">1</option>
                    </select>
                </div>
                <!-- Reset Filters  -->
                <div class="col-lg-2 col-md-3 text-end mt-4">
                    <a href="javascript:void(0)" class="btn btn-success rounded-pill reset_and_clear_btn text-center w-100">Reset Filters</a>
                </div>
            </div>
            <table class="table mb-0 table-bordered table-striped align-middle">
                <!-- ***** Table Head ***** -->
                <thead>
                    <tr class="align-middle table-success">
                        <th class="border-bottom text-center text-primary" style="width:10px;">Sr.#</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Username</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 50px;">Email</th>
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Phone Number</th>
                        <!-- <th class="border-bottom text-center text-primary" style="min-width: 90px;">Role</th> -->
                        <th class="border-bottom text-center text-primary" style="min-width: 90px;">Status</th>
                        <th class="border-bottom text-center text-primary" style="width:15px;">Action</th>
                    </tr>
                </thead>
                <!-- ***** Table Body ***** -->
                <tbody class="daily_vaccination">
                    <?php if (!empty($user_list) && is_array($user_list)): ?>
                        <?php foreach ($user_list as $key => $user): ?>
                            <tr>
                                <td class="text-center"><?= htmlspecialchars($user['sequence_number']) ?></td>
                                <td class="text-center"><?= htmlspecialchars(ucfirst($user['username'])) ?></td>
                                <td class="text-center"><?= htmlspecialchars($user['email']) ?></td>
                                <td class="text-center"><?= htmlspecialchars($user['phone_number']) ?></td>
                                <!-- <td class="text-center"><?= htmlspecialchars(ucfirst($user['role_title'])) ?></td> -->
                                <td class="text-center"><?= htmlspecialchars(ucfirst($user['status'])) ?></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <button class="p-1 mx-2 assign-student-btn" data-toggle="modal" data-target="#assignStudentModal" data-userid="<?= esc($user['id']) ?>">Assign Student</button>
                                        <button class="start-call" data-userid="<?= $user['id'] ?>" data-username="<?= htmlspecialchars($user['username']) ?>" data-tooltip="Call">Call</button>
                                        <button class="mx-2"><a href="<?= base_url('admin/users/add-user') ?>">Add Student</a></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">No users available.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div id="userspagination" class="mt-4 d-flex justify-content-center">
                <?= $pager_links ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="assignStudentModal" tabindex="-1" role="dialog" aria-labelledby="assignStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignStudentModalLabel">Assign a Teacher to a Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="<?= base_url('admin/users/save-assigned-student') ?>" class="mx-auto" style="max-width: 600px;">
                    <input type="hidden" name="user_id" id="hidden_user_id">
                    <select name="instructor_id" class="form-control bg-white">
                        <option selected disabled>Select a User</option>
                        <?php if (!empty($dropdown_users) && is_array($dropdown_users)): ?>
                            <?php foreach ($dropdown_users as $user): ?>
                                <option value="<?= esc($user['id']) ?>"><?= esc($user['username']) ?></option>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <option disabled>No users available.</option>
                        <?php endif; ?>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- <div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h3 class="modal-title text-primary fw-bold text-center" id="callModalLabel">Calling <span id="call-username"></span></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center align-items-center">
                <div class="video-container d-flex justify-content-center align-items-center w-100">
                    <video id="localVideo" autoplay playsinline class="video-element"></video>
                    <video id="remoteVideo" autoplay playsinline class="video-element"></video>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection() ?>
<?= $this->section('extraScript') ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#assignStudentModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var userId = button.data('userid');
            var modal = $(this);
            modal.find('#hidden_user_id').val(userId);
        });
    });
    // ----Display the message for 5 seconds---//
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            var alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(function() {
                    alert.remove();
                }, 500);
            });
        }, 5000);
    });
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.0/socket.io.js"></script> -->
<!-- <script>
    const socket = io('http://localhost:4000');

    // Triggering a call from the Admin/Teacher side
    $(document).on('click', '.start-call', function() {
        const userId = $(this).data('userid');
        const username = $(this).data('username');

        // Update the modal content with the user's information
        $('#call-username').text(username);
        $('#callModal').data('userid', userId); // Store user ID in the modal

        // Show the modal
        $('#callModal').modal('show');
    });

    // Handle call initiation when the modal is shown
    $('#callModal').on('shown.bs.modal', function() {
        const userId = $(this).data('userid');
        const username = $('#call-username').text();

        if (userId && username) {
            socket.emit('initiateCall', {
                userId,
                username
            });
        } else {
            console.error('User ID or username is missing');
        }
    });

    socket.on('callAccepted', () => {
        alert('The user accepted the call. Starting the video call...');
        startCall();
    });

    socket.on('callRejected', () => {
        alert('The user rejected the call.');
        $('#callModal').modal('hide'); // Hide the modal if the call is rejected
    });

    function startCall() {
        // Video call logic goes here
        console.log('Starting the video call...');
        // For example, you can start your WebRTC code here
    }
</script> -->
<!-- <script>
    const socket = io('http://localhost:4000');

    const config = {
        iceServers: [{
            urls: 'stun:stun.l.google.com:19302'
        }]
    };

    function initiateCall(userId, username) {
        const localVideo = document.getElementById('localVideo');
        const remoteVideo = document.getElementById('remoteVideo');
        const callUsernameElement = document.getElementById('call-username');

        if (!localVideo || !remoteVideo || !callUsernameElement) {
            console.error('One or more required elements are missing in the DOM.');
            return;
        }

        const peerConnection = new RTCPeerConnection(config);

        navigator.mediaDevices.getUserMedia({
                video: true
            })
            .then(stream => {
                if (localVideo) {
                    localVideo.srcObject = stream;
                }
                stream.getTracks().forEach(track => peerConnection.addTrack(track, stream));
                return peerConnection.createOffer();
            })
            .then(offer => peerConnection.setLocalDescription(offer))
            .then(() => {
                socket.emit('call-user', {
                    userId: userId,
                    offer: peerConnection.localDescription
                });
            })
            .catch(error => console.error('Error during call initiation: ', error));

        peerConnection.onicecandidate = event => {
            if (event.candidate) {
                console.log('Sending ICE candidate:', event.candidate);
                socket.emit('ice-candidate', {
                    toUserId: userId,
                    candidate: event.candidate
                });
            }
        };

        peerConnection.ontrack = event => {
            if (remoteVideo) {
                remoteVideo.srcObject = event.streams[0];
            }
        };

        if (callUsernameElement) {
            callUsernameElement.innerText = username;
        }

        new bootstrap.Modal(document.getElementById('callModal')).show();
    }

    document.querySelectorAll('.start-call').forEach(button => {
        button.addEventListener('click', () => {
            const userId = button.getAttribute('data-userid');
            const username = button.getAttribute('data-username');
            initiateCall(userId, username);
        });
    });
</script> -->
<?= $this->endSection() ?>