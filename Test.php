<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Achievement</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#f2f2f2;
    padding:20px;
}

.container{
    max-width:1400px;
    margin:auto;
}

/* ===== PAGE TITLE ===== */
h1{
    font-size:28px;
    margin-bottom:20px;
    text-align:center;
}

/* ===== DASHBOARD TOP BOXES ===== */
.top-boxes{
    display:flex;
    gap:20px;
    margin:20px;
}

.top-box{
    flex:1;
    background:white;
    padding:20px;
    border-radius:10px;
    text-align:center;
    box-shadow:0 0 8px rgba(0,0,0,0.1);
}

.top-box h3{
    font-size:16px;
}

.top-box p{
    font-size:28px;
    font-weight:bold;
    margin-top:10px;
}

/* ===== FILTER TABS ===== */
.tabs{
    margin:20px 0;
    display:flex;
    gap:15px;
}

.btn{
    background:black;
    color:white;
    padding:8px 20px;
    border-radius:20px;
    cursor:pointer;
    font-size:14px;
    font-weight:bold;
}

/* ===== MAIN LAYOUT ===== */
.main{
    display:flex;
    gap:20px;
}

/* LEFT SIDE */
.left{
    flex:2;
}

/* ACHIEVEMENT CARDS */
.card-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.card{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 0 8px rgba(0,0,0,0.1);
}

.card-title{
    font-size:18px;
    font-weight:bold;
}

.status{
    font-size:14px;
    margin:5px 0;
    color:#666;
}

/* Progress bar */
.progress-bar{
    width:100%;
    height:10px;
    background:#ddd;
    border-radius:10px;
    margin:10px 0;
}

.progress{
    height:100%;
    width:75%;
    background:#798afb;
    border-radius:10px;
}

/* Bottom row in card */
.card-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.card button{
    padding:6px 15px;
    background:black;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

/* ===== RIGHT SIDE ===== */
.right{
    flex:1;
}

.sidebar-box{
    background:white;
    padding:20px;
    border-radius:12px;
    margin-bottom:20px;
    box-shadow:0 0 8px rgba(0,0,0,0.1);
}

.sidebar-title{
    font-size:18px;
    font-weight:bold;
    margin-bottom:10px;
}

.progress-list div{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin:6px 0;
    border-radius: 6px;
    background-color: #f5f5f5;  
}

.progress-list{
    display:flex;
    flex-direction: column;
    gap: 6px;
    padding: 10px;
}

/* ===== MOBILE VIEW ===== */
@media(max-width:900px){
    .main{
        flex-direction:column;
    }

    .card-grid{
        grid-template-columns:1fr;
    }
}

@media(max-width:600px){
    h1{
        text-align:center;
    }

    .tabs{
        overflow-x:auto;
    }

    .tabs::-webkit-scrollbar{
        display:none;
    }
}
</style>
</head>
<body>

<div class="container">

    <h1>Achievement</h1><hr>

    <!-- Top Summary Boxes -->
    <div class="top-boxes">
        <div class="top-box"><h3>Total Point</h3><p>1500</p></div>
        <div class="top-box"><h3>Completed</h3><p>12</p></div>
        <div class="top-box"><h3>Completion Rate</h3><p>60%</p></div>
    </div>

    <!-- Tabs -->
    <div class="tabs">
        <button class='btn'>All</button>
        <button class="btn">Eco</button>
        <button class="btn">Social</button>
        <button class="btn">Milestone</button>
        <button class="btn">Challenge</button>
    </div>

    <div class="main">
        <div class="left">

            <div class="card-grid">

                <div class="card">
                    <p class="card-title">Hat Name</p>
                    <p class="status">In progress</p>
                    <p>Achievement description line goes here</p>
                    <div class="progress-bar"><div class="progress"></div></div>
                    <div class="card-bottom">
                        <p>150 points</p>
                        <button type='button'>View</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="right">
            <div class="sidebar-box">
                <p class="sidebar-title">Achievement Progress</p>
                <p>Overall completion status</p>
                <img src='success.jpg' width='100%' height='100%' alt='success image'>

                <div class="progress-list">
                    <div><p>Completed</p><p>4</p></div>
                    <div><p>In progress</p><p>4</p></div>
                    <div><p>Not unlocked</p><p>4</p></div>
                </div>
            </div>

            <div class="sidebar-box">
                <p class="sidebar-title">Recently unlocked</p>
                <div style="height:140px;background:#eee;border-radius:12px;"></div>
            </div>

        </div>
    </div>

</div>
</body>
</html>
