        <center>
          <br>
          ⪻────𖤓────⪼
          <br>

                <h2 id="members">Members</h2>

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                ?>

                                
                <?php
                // Count approved members
                $approvedQuery = $conn->query("SELECT COUNT(*) as total FROM $fanlistingname WHERE pending = 'y'");
                $approved = $approvedQuery->fetch_assoc()['total'];

                // Count pending members
                $pendingQuery = $conn->query("SELECT COUNT(*) as total FROM $fanlistingname WHERE pending = 'n'");
                $pending = $pendingQuery->fetch_assoc()['total'];
                ?>

                <div class="member-stats">
                  <p><b>Approved members:</b> <?= $approved ?></p>
                  <p><b>Pending members:</b> <?= $pending ?></p>
                </div>



            </center>
  


            <center>

            <?php if ($result->num_rows > 0): ?>
              <div class="members-list">
                <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="member-entry">
                    <br>
                    <h3 class="member-name"><?= htmlspecialchars($row["name"]) ?></h3>
                    <ul class="member-details">
                      <?php if (!empty($row["site"])): ?>
                        <li><strong>Website:</strong> 
                          <a href="<?= htmlspecialchars($row["site"]) ?>" target="_blank">
                            <?= htmlspecialchars($row["site"]) ?>
                          </a>
                        </li>
                      <?php endif; ?>

                      <?php if (!empty($row["email"])): ?>
                        <li><strong>Email:</strong> 
                          <a href="mailto:<?= htmlspecialchars($row["email"]) ?>">
                            <?= htmlspecialchars($row["email"]) ?>
                          </a>
                        </li>
                      <?php endif; ?>

                      <?php if (!empty($row["country"])): ?>
                        <li><strong>Country:</strong> <?= htmlspecialchars($row["country"]) ?></li>
                        <br>
                        ⪻────𖤓────⪼
                      <?php endif; ?>
                    </ul>
                  </div>
                  <br>
                <?php endwhile; ?>
              </div>
            <?php else: ?>
              <p>No members yet.</p>
            <?php endif; ?>
       

            </center>
         </div> 
        </div> 


</form>
