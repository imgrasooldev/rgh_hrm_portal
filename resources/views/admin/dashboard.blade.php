@extends('admin.master')
@section('admin_content')
    <section class="dashWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profileimg">
                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/profimg.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Career Leader <span><i class="fas fa-chart-line"></i></span></h5>
                                </div>
                                <div class="carercardcon">
                                    <h5>John Doe</h5>
                                    <h6>Senior Executive</h6>
                                    <div class="performchart">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                    <a href="#">My Performance</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Employee Details <span><i class="far fa-id-badge"></i></span></h5>
                                </div>
                                <div class="empdet">
                                    <ul>
                                        <li>
                                            <div class="empinf">
                                                <span><i class="fas fa-star"></i></span>
                                                <div>
                                                    <h6>Designation</h6>
                                                    <p>Managing director</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="empinf">
                                                <span><i class="far fa-clock"></i></span>
                                                <div>
                                                    <h6>Shift</h6>
                                                    <p>Evening-Bi</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="empinf">
                                                <span><i class="far fa-file-search"></i></span>
                                                <div>
                                                    <h6>Employee ID</h6>
                                                    <p>RGS-888</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="empinf">
                                                <span><i class="far fa-calendar-alt"></i></span>
                                                <div>
                                                    <h6>Date of joining</h6>
                                                    <p>21-Sep-1990</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="empinf">
                                                <span><i class="far fa-exchange-alt"></i></span>
                                                <div>
                                                    <h6>Employment</h6>
                                                    <p>1 year 10 months 1 days (Permanent)</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Time Tracking <span><i class="far fa-clock"></i></span></h5>
                                </div>
                                <div class="timecard">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="cmptime">
                                                <h5>7h 47m 34s</h5>
                                                <h6>Avg Working Hours</h6>
                                                <p>Jul 21 - Aug 20</p>
                                            </div>
                                            <div class="cmptime mb-0">
                                                <h5>23h 22m 44s</h5>
                                                <h6>Working Hours</h6>
                                                <p>(not including today & saturday)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div>
                                                <canvas id="line-chart"></canvas>
                                            </div>
                                            <div class="cmptime mb-0">
                                                <h5>0h 0m 0s</h5>
                                                <h6>Weekly Time Report</h6>
                                                <p>Aug 01 - Aug 05 (4 days left)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="timeimgresp">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/img.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Annual Leave</h5>
                                </div>
                                <div class="leavewrap">
                                    <ul>
                                        <li>
                                            <div class="leavecount">
                                                <div>
                                                    <h5>5/25</h5>
                                                    <h6>Total Leaves</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leavecount">
                                                <div>
                                                    <h5>8</h5>
                                                    <h6>Annual Leaves Remaining</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leavecount">
                                                <div>
                                                    <h5>7</h5>
                                                    <h6>Casual Leaves Remaining</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="leavecount">
                                                <div>
                                                    <h5>10</h5>
                                                    <h6>Sick Leaves Remaining</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>My Department <span><i class="fas fa-users"></i></span></h5>
                                </div>
                                <ul class="deptusers">
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Salary Snap <span><i class="far fa-wallet"></i></span></h5>
                                </div>
                                <ul class="deptusers">
                                    <li>
                                        <div class="deptlst">
                                            <div>
                                                <h5>Leave Deduction</h5>
                                                <span>PKR 12,5000</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div>
                                                <h5>Gross Salary</h5>
                                                <span>PKR ********</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div>
                                                <h5>Tax Deduction</h5>
                                                <span>PKR 650</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>This Month’s Absent <span><i class="fas fa-calendar-alt"></i></span></h5>
                                </div>
                                <div class="monthabsent">
                                    <table class="table">
                                        <tr>
                                            <th>Date</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                        <tr>
                                            <td>21-july-2022</td>
                                            <td>Time Short Discrepancy</td>
                                            <td><a href="#" class="discrepancybtn">Fill Leave</a></td>
                                        </tr>
                                        <tr>
                                            <td>21-july-2022</td>
                                            <td>Leave Discrepancy</td>
                                            <td><a href="#" class="discrepancybtn">Fill Leave</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>My ticketing <span><i class="far fa-ticket-alt"></i></span></h5>
                                </div>
                                <ul class="ticklist">
                                    <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">My All Tickets</a></li>
                                    <li><a href="#">My Pending Tickets</a></li>
                                    <li><a href="#">My Completed Tickets</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="carercard">
                                <div class="carercardhd">
                                    <h5>Birthdays <span><i class="far fa-birthday-cake"></i></span></h5>
                                </div>
                                <ul class="deptusers">
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="deptlst">
                                            <div class="depusrimg">
                                                <img src="{{ asset(env('adminIamgePath') . 'assets/images/user2.png') }}"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h5>Muhammad Hassan</h5>
                                                <span>Developer</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @include('admin.includes.rightbar')
                </div>
            </div>
        </div>
    </section>

    <!-- Leave Popup -->
    <div class="discrepancyPopup">
        <a href="#" class="closebtn">x</a>
        <h4>Discrepancy Form</h4>
        <!-- <h5>Annual Leaves</h5> -->
        <div class="discrepancyLeaves">
            <ul>
                <li>
                    <div>
                        <h5>5/25</h5>
                        <h6>Total <br>Leaves</h6>
                    </div>
                </li>
                <li>
                    <div>
                        <h5>8</h5>
                        <h6>Annual Leaves <br>Remaining</h6>
                    </div>
                </li>
                <li>
                    <div>
                        <h5>7</h5>
                        <h6>Casual Leaves <br>Remaining</h6>
                    </div>
                </li>
                <li>
                    <div>
                        <h5>10</h5>
                        <h6>Sick Leaves <br>Remaining</h6>
                    </div>
                </li>
            </ul>
        </div>
        <form action="#">
            <div class="leavefield">
                <label>Reason</label>
                <textarea></textarea>
            </div>
            <div class="leavefield">
                <label>Reason Leave Type</label>
                <select>
                    <option>Leave Discrepancy</option>
                    <option>Time Short Discrepancy</option>
                </select>
            </div>
            <div class="leavefield">
                <label>Select Leave Type</label>
                <select>
                    <option>Casual Leave</option>
                    <option>Sick Leave</option>
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="overlay"></div>

    @include('admin.includes.scripts')
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [90, 10],
                    backgroundColor: [
                        '#e74c3c',
                        '#FFFF00'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            }
        });

        var ctx2 = $("#line-chart");
        var lineChart = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "2022",
                    data: [5, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    backgroundColor: "#e74c3c",
                    borderColor: "#e74c3c",
                    borderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 8,
                    pointBorderColor: "#e74c3c",
                    pointBackgroundColor: "#e74c3c",
                    pointStyle: 'circle',
                    spanGaps: true,
                    steppedLine: true
                }]
            },
            options: {
                maintainAspectRatio: false
            }
        });

        function Submit() {
            alert("Time Out Successfully!");
            $('#BlockUIConfirm').hide();
        }
    </script>
@endsection
