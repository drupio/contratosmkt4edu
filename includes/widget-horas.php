<div class="card widget mb-4">
    <div class="card h-100 border-0">
        <div class="card-body text-center">
            <div class="display-5">
                <i class="bi bi-stopwatch text-secondary"></i>
            </div>

            <h3 class="mt-3 text-dark"><?php echo $soma ?>h <span class="text-black-50">/ 220h</span></h3>
            <h4 class="mb-1">Horas Lançadas</h4>
            <div class="text-danger">em <?php echo $meses[$mes - 1]; ?></div>
            <!-- <div class="progress mt-3" style="height: 18px">
                            <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div> -->
        </div>
    </div>
</div>