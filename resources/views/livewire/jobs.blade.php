<div>
    <style>
        /* Global styles */
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #02454f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        /* Navigation styles */
        .navigation {
            display: flex;
            justify-content: flex-end;
            margin: 20px 0;
        }

        .navigation button {
            font-size: 14px;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
            background-color: #0077b6;
            color: #fff;
            text-decoration: none;
        }

        /* Modal styles */
        .modal-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
        }

        .modal {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 20px;
            position: relative;
        }

        .close-button {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
            background-color: #fff;
            color: red;
            border: 2px solid #000;
            border-radius: 50%;
            height: 24px;
            width: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Job card styles */
        .job-listings {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .job-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
        }

        .job-card:hover {
            border: 2px solid black;
        }

        .job-title {
            font-size: 18px;
            color: #333;
            margin: 0;
        }

        .job-company {
            font-weight: bold;
            color: #0077b6;
        }

        .job-details {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .job-location,
        .job-salary,
        .job-posted-at,
        .job-vacancies,
        .job-education-requirement,
        .job-experience-requirement,
        .job-skills-required {
            font-size: 14px;
            color: #555;
        }

        .apply-button {
            background-color: #0077b6;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        .apply-button:hover {
            background-color: #00546d;
        }

        /* Table styles */
        .job-list {
            width: 100%;
            margin-top: 10px;
            font-size: 14px;
        }

        .job-list th {
            background-color: #007BFF;
            color: white;
            font-size: 14px;
        }

        .job-list td {
            vertical-align: middle;
            padding: 10px;
        }

        .job-list tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        /* Success and error message styles */
        #success-message,
        #error-message {
            position: relative;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #success-message {
            background-color: #4CAF50;
            color: white;
        }

        #error-message {
            background-color: #f44336;
            color: white;
        }

        .close-message {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: green;
        }

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: red;
        }
    </style>
    <div>
        <div class="row" style="margin-left: 71%;margin-top:10px">
           <a href="/AppliedJobs" style="text-decoration: none;">
           <button  style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;"> <i class="fas fa-check" style="margin-right: 5px;"></i> Applied Jobs</button>
           </a>
            <button style="font-size:12px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <a href="/UserProfile" style="text-decoration: none;color:white"> <i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
            </button>
            <button style="font-size:12px;margin-left: 5px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout"> <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i> Logout</button>
        </div>

       
        <div class="container">
            <h2 style="text-align: center;
            font-family: Montserrat;
            ">All Jobs List</h2>
            @if($showSuccessMessage)
            <div class="alert alert-success" id="success-message">
                Your job application has been submitted successfully!
                <button class="close-message" wire:click="dismissMessage">×</button>
            </div>
            @elseif ($errors->has('duplicate'))
            <div class="alert alert-danger" id="error-message">
                {{ $errors->first('duplicate') }}
                <button class="close" wire:click="dismissError">×</button>
            </div>
            @endif
            @if($jobs)
            <div class="job-listings" style="margin-top: 20px;">
                @foreach ($jobs as $job)
                <div class="job-card" style="text-align: start;">
                    <a wire:click="showJobDetails('{{$job->job_id}}')" style="text-decoration: none;color:black">
                        <h3 class="job-title">{{ $job->title }}</h3>
                        <p class="job-company"><strong class="subtitle">{{ $job->company_name }}</strong></p>

                        <div>
                            <table>
                                <tr>
                                    <th style="font-size: 12px; text-align: start;">
                                        <p class="job-location" style="width: 150px;">
                                            <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                                        </p>
                                    </th>
                                    <th style="font-size: 12px; text-align: start;">
                                        <p class="job-salary" style="width:250px">
                                            <strong style="margin-right: 10px;">₹</strong>{{ number_format($job->salary, 2) }} PA
                                        </p>
                                    </th>
                                    <th style="font-size: 12px; text-align: start;">
                                        <p class="job-posted-at" style="width:150px">
                                            <i class="far fa-calendar-alt"></i> {{ date('d M Y', strtotime($job->expire_date)) }}
                                            <strong style="font-size: 10px;">(Expired)</strong>
                                        </p>
                                    </th>
                                </tr>
                            </table>
                        </div>

                        <table>
                            <tr>
                                <th style="font-size: 12px; text-align: start;">
                                    <p class="job-vacancies" style="width:150px">
                                        <i class="fas fa-users"></i> Vacancies: {{ $job->vacancies }}
                                    </p>
                                </th>
                                <th style="font-size: 12px; text-align: start;">
                                    <p class="job-education-requirement" style="width:250px;margin-right: 10px;">
                                        <i class="fas fa-graduation-cap"></i> Education: {{ $job->education_requirement }}
                                    </p>
                                </th>
                                <th style="font-size: 12px; text-align: start;">
                                    <p class="job-experience-requirement" style="width:150px;">
                                        <i class="fas fa-briefcase"></i> Experience: {{ $job->experience_requirement }}
                                    </p>
                                </th>
                            </tr>
                        </table>

                        <p class="job-skills-required">
                            <i class="fas fa-tools"></i> Skills: {{ $job->skills_required }}
                        </p>

                    </a>
                    <div style="text-align: center;">
                        <a wire:click="showJobApplication('{{$job->job_id}}')" class="apply-button">Apply</a>
                    </div>
                </div>
                @endforeach

            </div>
            @else
            <div style="text-align:center;margin-top:10px">No Jobs Found</div>
            @endif
        </div>
    </div>
</div>