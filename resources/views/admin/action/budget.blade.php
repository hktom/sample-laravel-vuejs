<div>
    <hr/>
    <div class="box-header with-border">
        <h3 class="box-title">Total Budgetaire</h3>
    </div>

   <div style="padding:0px 5%">
    <div class="box-body table-responsive no-padding" style="overflow: visible;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Source FINANCEMENT</th>
                    <th>TOTAL COUT ETAT</th>
                    <th>COUT EXTERNE</th>
                    <th>TOTAL COUTS</th>

            </thead>
            {{--              @foreach($data["acquiredstates"][0]->actors as $key => $value)
                         {{ $value['name'] }},
                        @endforeach

                        @foreach($data["newstates"][0]->actors as $key => $value)
                         {{ $value['name'] }},
                        @endforeach --}}
            <tbody>
                <tr>
                    <td>
                    <?php
                    $actors=array();
                    foreach ($data["acquiredstates"][0]->actors as $key => $value){
                        $actors[$value['id']]=$value['name'];
                    }

                    foreach ($data["newstates"][0]->actors as $key => $value){
                        $actors[$value['id']]=$value['name'];
                    }

                    $i=0;
                    foreach ($actors as $key => $value){
                        echo "$value ";
                        $i++;

                        if($i<sizeOf($actors)) echo ",";
                    }

                    ;?>
                    </td>

                    <th>
                        <?php
                        // Totat Acquired State
                        $acquired=$data["acquiredstates"][0]->rpt_20_23+
                        $data["acquiredstates"][0]->ivest+
                        $data["acquiredstates"][0]->fonction36+
                        $data["acquiredstates"][0]->fonction31;

                        //Total New State
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
                    }

                    $total_cout=$acquired+$final_total;
                    echo $total_cout;
                        ;?>
                    </th>

                    <th>
                    <?php
                    $externe_cout=isset($data["cout_externe"])?$data["cout_externe"]:0;
                    echo $externe_cout;
                    ;?>
                    </th>

                    <th>{{ $externe_cout+$total_cout }}</th>
                </tr>
            </tbody>
        </table>
        </div>
   </div>

</div>
