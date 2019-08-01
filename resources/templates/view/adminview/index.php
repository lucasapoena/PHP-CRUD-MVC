<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
<?php
$produtos = $_REQUEST['produtos'];
$labels = [];
$data = [];

if (!empty($produtos)){
    foreach ($produtos as $produto){
        array_push($labels, $produto->getNome());
        array_push($data, $produto->getPreco());

    }
}

?>

<canvas id="myChart" width="400" height="200"></canvas>
<div class="section">
    <div class="row">
        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center purple-text"><i class="material-icons">flash_on</i></h2>
                <h5 class="center">Speeds up development</h5>

                <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center purple-text"><i class="material-icons">group</i></h2>
                <h5 class="center">User Experience Focused</h5>

                <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="icon-block">
                <h2 class="center purple-text"><i class="material-icons">settings</i></h2>
                <h5 class="center">Easy to work with</h5>

                <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
            </div>
        </div>
    </div>


</div>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: '# Valor dos ultimos produtos',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>