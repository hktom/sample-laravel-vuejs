<div>
    <hr/>
    <div class="box-header with-border">
        <h3 class="box-title">Etats Acquis</h3>
    </div>

   <div style="padding:0px 5%">
    <div class="box-body table-responsive no-padding" style="overflow: visible;">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nature</th>
                    <th>Office</th>
                    <th>Couts total 2020-2023</th>
            </thead>
            <tbody>
                <tr>
                    <td>Fonctionnement / 31 </td>
                    <td></td>
                    <td>CHF
                        {{
                        $data["acquiredstates"][0]->fonction31>0?
                        $data["acquiredstates"][0]->fonction31:0
                        }}
                    </td>
                </tr>

                <tr>
                    <td>Fonctionnement / 36 </td>
                    <td></td>
                    <td>CHF
                        {{
                        $data["acquiredstates"][0]->fonction36>0?
                        $data["acquiredstates"][0]->fonction36:0
                        }}
                    </td>
                </tr>

                <tr>
                    <td>Investissement</td>
                    <td></td>
                    <td>CHF
                        {{
                        $data["acquiredstates"][0]->ivest>0?
                        $data["acquiredstates"][0]->ivest:0
                        }}
                    </td>
                </tr>


                <tr>
                    <td>RPT</td>
                    <td></td>
                    <td>CHF
                        {{
                        $data["acquiredstates"][0]->rpt_20_23>0?
                        $data["acquiredstates"][0]->rpt_20_23:0
                        }}
                    </td>
                </tr>

                <tr>
                    <td>Autres</td>
                    <td></td>
                    <td>CHF 0</td>
                </tr>

                <tr>
                    <th>TOTAL</th>
                    <td></td>
                    <th>CHF
                        {{
                        $data["acquiredstates"][0]->rpt_20_23+
                        $data["acquiredstates"][0]->ivest+
                        $data["acquiredstates"][0]->fonction36+
                        $data["acquiredstates"][0]->fonction31
                        }}
                    </th>
                </tr>
            </tbody>
        </table>
        </div>
   </div>

</div>
