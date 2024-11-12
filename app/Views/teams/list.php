<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= esc(session()->getFlashdata('success')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('info')) : ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= esc(session()->getFlashdata('info')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<section id="team" class="team">
    <div class="container">
        <div class="section-title mt-5" data-aos="fade-in" data-aos-delay="100">
            <h2>Team</h2>
        </div>

        <div class="row">
            <?php if (!empty($teams)) : ?>
                <?php foreach ($teams as $team): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="member" data-aos="fade-up">
                            <div class="pic">
                                <img src="<?= base_url('uploads/' . esc($team['image'])) ?>" class="img-fluid" alt="Student Profile" width="500">
                            </div>
                            <div class="member-info">
                                <h4><?= esc($team['name']) ?></h4>
                                <span><?= esc($team['description']) ?></span>
                                <div class="social">
                                    <a href="/teams/edit/<?= esc($team['id']) ?>" class="btn btn-primary">Edit</a>
                                    <a href="/teams/delete/<?= esc($team['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No team members found.</p>
            <?php endif; ?>
        </div>

        <br><br>

        <a href="/teams/create" class="btn btn-primary mt-4">Add Team</a>
    </div>
</section><!-- End Team Section -->

