<div class="assignment-upload-card" data-assignment="{{ $assignment->id }}">

    <div class="assignment-header">

        <div>
            <h6>
                <i class="fas fa-cloud-upload-alt"></i>
                Assignment Submission
            </h6>

            <small>
                {{ $assignment->title }}
            </small>
        </div>

        @if ($submission)
            <span class="status-badge success">
                Submitted
            </span>
        @else
            <span class="status-badge pending">
                Pending
            </span>
        @endif

    </div>


    {{-- Existing File Preview --}}
    @if ($submission)

        @php
            $ext = strtolower(pathinfo($submission->file, PATHINFO_EXTENSION));
        @endphp

        <div class="existing-file-box">

            <div class="file-left">

                <div class="file-icon">

                    @if ($ext == 'pdf')
                        <i class="fas fa-file-pdf"></i>
                    @else
                        <i class="fas fa-file-word"></i>
                    @endif

                </div>

                <div>

                    <div class="file-title">
                        Current Submission
                    </div>

                    <div class="file-date">
                        Submitted:
                        {{ $submission->created_at->format('d M Y h:i A') }}
                    </div>

                </div>

            </div>

            <div class="file-actions">

                <a href="{{ asset($submission->file) }}" target="_blank" class="btn btn-view">

                    <i class="fas fa-eye"></i>
                    View

                </a>

            </div>

        </div>

    @endif


    <form id="uploadForm{{ $assignment->id }}" action="{{ route('student.assignment.submit', $assignment->id) }}"
        method="POST" enctype="multipart/form-data">

        @csrf

        <input type="file" class="fileInput" name="file" accept=".pdf,.doc,.docx" hidden>

        <label class="upload-area chooseFileBtn">

            <i class="fas fa-cloud-upload-alt"></i>

            <h5>
                Choose File
            </h5>

            <p>
                PDF, DOC, DOCX (Max 10 MB)
            </p>

        </label>


        <div class="previewBox d-none">

            <div class="preview-left">

                <i class="previewIcon  fas fa-file"></i>

                <div>

                    <div class="previewName">
                    </div>

                    <small class="previewSize">
                    </small>

                </div>

            </div>

            <button type="button" class="remove-btn removeFile ">

                <i class="fas fa-times"></i>

            </button>

        </div>


        <button class="submit-btn" type="submit">

            @if ($submission)
                <i class="fas fa-sync"></i>
                Replace Submission
            @else
                <i class="fas fa-upload"></i>
                Submit Assignment
            @endif

        </button>

    </form>

    @if ($errors->any())
        <div class="bg-red-100 p-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
