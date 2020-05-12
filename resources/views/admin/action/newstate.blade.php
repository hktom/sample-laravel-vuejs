<?php
$total=array();
;?>
<div>
    <hr/>
    <div class="box-header with-border">
        <h3 class="box-title">Etats Nouveaux</h3>
    </div>

   <div style="padding:0px 5%">
    <div class="box-body table-responsive no-padding" style="overflow: visible;">
        <table class="table table-hover">
            <thead>
                <tr style="background-color: #F8F9FA">
                    <th scope="col">Nature</th>
                    <th scope="col">Office</th>
                    <th scope="col" colspan="5" style="text-align: center">COUTS</th>
                </tr>
                <tr>
                    <th scope="row">&nbsp;</th>
                    <th scope="row">&nbsp;</th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fonctionnement / 31 </td>
                    <td></td>
                    <?php
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            echo "<td>{$state["fonct31"][$i]->amount}</td>";
                        } catch (\Throwable $th) {
                            echo "<td>0</td>";
                        }
                    }
                    ?>

                    <?php
                    $total[0]=0;
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            $total[0]=$total[0]+$state["fonct31"][$i]->amount;
                        } catch (\Throwable $th) {
                            $total[0]=$total[0]+0;
                        }
                    }
                    echo "<th>{$total[0]}</th>"
                    ?>

                </tr>

                <tr>
                    <td>Fonctionnement / 36 </td>
                    <td></td>
                    <?php
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            echo "<td>{$state["fonct36"][$i]->amount}</td>";
                        } catch (\Throwable $th) {
                            echo "<td>0</td>";
                        }
                    }
                    ?>

                    <?php
                    $total[1]=0;
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            $total[1]=$total[1]+$state["fonct36"][$i]->amount;
                        } catch (\Throwable $th) {
                            $total[1]=$total[1]+0;
                        }
                    }
                    echo "<th>{$total[1]}</th>"
                    ?>

                </tr>

                <tr>
                    <td>Investissement</td>
                    <td></td>
                    <?php
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            echo "<td>{$state["invests"][$i]->amount}</td>";
                        } catch (\Throwable $th) {
                            echo "<td>0</td>";
                        }
                    }
                    ?>

                    <?php
                    $total[2]=0;
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            $total[2]=$total[2]+$state["invests"][$i]->amount;
                        } catch (\Throwable $th) {
                            $total[2]=$total[2]+0;
                        }
                    }
                    echo "<th>{$total[2]}</th>"
                    ?>

                </tr>

                <tr>
                    <td>RH = xx ETP</td>
                    <td></td>
                    <?php
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            echo "<td>{$state["rhs"][$i]->amount}</td>";
                        } catch (\Throwable $th) {
                            echo "<td>0</td>";
                        }
                    }
                    ?>

                    <?php
                    $total[3]=0;
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            $total[3]=$total[3]+$state["rhs"][$i]->amount;
                        } catch (\Throwable $th) {
                            $total[3]=$total[3]+0;
                        }
                    }
                    echo "<th>{$total[3]}</th>"
                    ?>

                </tr>

                <tr>
                    <td>Autres</td>
                    <td></td>
                    <?php
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            echo "<td>{$state["others"][$i]->amount}</td>";
                        } catch (\Throwable $th) {
                            echo "<td>0</td>";
                        }
                    }
                    ?>

                    <?php
                    $total[4]=0;
                    for ($i=0; $i < 3 ; $i++) {
                        try {
                            $total[4]=$total[4]+$state["others"][$i]->amount;
                        } catch (\Throwable $th) {
                            $total[4]=$total[4]+0;
                        }
                    }
                    echo "<th>{$total[4]}</th>"
                    ?>

                </tr>

                <tr>
                    <th>TOTAL</th>
                    <td></td>
                    <?php
                    $final_total=0;
                    $row_total=0;
                    $amount[]=$state["fonct31"];
                    $amount[]=$state["fonct36"];
                    $amount[]=$state["invests"];
                    $amount[]=$state["rhs"];
                    $amount[]=$state["others"];
                    //isset([$i]->amount)?$state["fonct31"][$i]->amount:0+;
                    for ($i=0; $i < 3 ; $i++) {
                        $fonct31=isset($amount[0][$i])?$amount[0][$i]->amount:0;
                        $fonct36=isset($amount[1][$i])?$amount[1][$i]->amount:0;
                        $invests=isset($amount[2][$i])?$amount[2][$i]->amount:0;
                        $rhs=isset($amount[3][$i])?$amount[3][$i]->amount:0;
                        $others=isset($amount[4][$i])?$amount[4][$i]->amount:0;

                        $row_total=$fonct31+$fonct36+$rhs+$others;
                        $final_total=$final_total+$row_total;
                        echo "<th>$row_total</th>";
                    }

                    echo "<th>$final_total</th>";
                    ?>

                </tr>

            </tbody>
        </table>
        </div>
   </div>

</div>
