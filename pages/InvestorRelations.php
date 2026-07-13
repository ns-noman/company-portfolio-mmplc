<div class="bg-white rounded shadow p-4" style="margin:auto;">
  <h3 class="fw-bold mb-4 display-6 text-center text-primary" data-aos="fade-up">Investor Relations</h3>
  <div class="table-responsive">
    <table class="table table-bordered table-hover align-middle">
      <caption class="text-center fw-bold">MMPLC Financial Reports and Documents</caption>
      <thead class="table-dark text-center">
        <tr>
          <th style="width: 25%;">Financial Year / Section</th>
          <th>File</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = [
          "Financial Year 2024-25" => [
            ["Price Sensitive Information 3rd Quarter", "3rd Quarter PSI of MMPLC.pdf"],
            ["3rd Quarterly Financial Statements FY 2024-25", "3rd Quarter 2025 of Magura Multiplex with sign.pdf"],
            ["2nd Quarterly Financial Statements FY 2024-25", "2nd Quarterly Financial Statements FY 2024-25 of PPP.pdf"],
            ["Ist Quarter FS 2024-2025", "PPP -Ist Quarter FS 2024-2025.pdf"],
          ],
          "Financial Year 2023-24" => [
            ["Annual Accounts 2024", "Annual Accounts 2024 of PPP.pdf"],
            ["Year wise summary of unclaimed dividend of Magura Multiplex PLC.", "Year wise summary of unclaimed of Paper Processing.pdf"],
            ["MMPLC 3rd Quarter FS 2023-2024", "PPP 3rd Quarter FS 2023-2024  30.06.24.pdf"],
            ["2nd Quarter Financial Statements 2023-24", "2nd Quarter Financial Statements 2023-24 of PPP.pdf"],
            ["Unclaimed and unpaid dividend 2022, 2023", "Unclaimed and upaid dividend 2022, 2023.pdf"],
            ["1st Quarter Financial Statements 2023-24", "1st Quarter Accounts 2023 of PPP with sign.pdf"],
            ["6th EGM Notice", "6th EGM Notice of Paper Processing and PackagingLtd..pdf"],
            ["Final Merger Scheme of MPM with MMPLC", "Final Merger Scheme of MPM with PPP.pdf"],
          ],
          "Financial Year 2022-23" => [
            ["Annual Accounts 2023", "Annual Accounts 2023 PPP.pdf"],
            ["MMPLC Stock Dividend 11%, 31.12.2022", "PPP Stock Dividend _31.12.2022.pdf"],
            ["MMPLC Dividend 2021 cash 10%, 31.12.2022", "PPP Dividend 2021_31.12.2022.pdf"],
            ["MMPLC Dividend 2020 cash 11%, 31.12.2022", "PPP Dividend 2020 cash_31.12.2022 - submit.pdf"],
            ["Q3 30-04-2023 of MMPLC", "Q3 30-04-2023 of PPP with sign.pdf"],
            ["Half yearly accounts of Magura Multiplex PLC.", "PPPL Draft  FS 2st Qtr 22-23 BD _ BSEC .pdf"],
            ["1st Quarter 2022 of MMPLC", "1st Quarter 2022 PPPL.pdf"],
            ["33<sup>rd</sup> Annual Report MMPLC 2022", "Annual Report PPP 2022.pdf"],
          ],
          "Financial Year 2021-22" => [
            ["Dividend distribution policy MMPLC", "Dividend distribution policy PPP.pdf"],
            ["MMPLC AGM Correction Notice 2022", "PPP AGM Correction Notice 2022.pdf"],
            ["MMPLC Annual Report 2022", "PPP Annual Report 2022.pdf"],
            ["Proxy Form MMPLC 2022", "Proxy Form PPP 2022.pdf"],
            ["33rd Virtual AGM System Manual of MMPLC", "33rd Virtual AGM System Manual of PPPL.pdf"],
            ["Annual Accounts 2022 of MMPLC", "Annual Accounts 2022 of PPP.pdf"],
            ["Financial Statement", "PPPL 3rd Quarter (Q3) FS.pdf"],
            ["MMPLC - PSI - Q3", "PPP - PSI - Q3.pdf"],
            ["5th EGM Notice - Revised", "5th EGM Notice - Revised.pdf"],
            ["MMPLC - 5th EGM Notice (06.02.2022)", "PPP - 5th EGM Notice (06.02.2022).pdf"],
            ["PSI - Q2 - 31.01.2022", "PSI - PPP with signature.pdf"],
            ["MMPLC Half Yearly'2021 FS (31.01.2022)", "PPPL Half Yearly'2021 FS (31.01.2022).pdf"],
            ["PSI - MMPLC - Quarter-1", "PSI - PPP - Quarter-1 (04.12.2021).pdf"],
            ["1st Quarter Financial Statements From July 01, 2021 to September 30, 2021", "PPP - 2nd Quarterly Financial Statements (Jul-Sept'21) Final.pdf"],
          ],
          "Financial Year 2020-21" => [
            ["Annual Report 2020-21 MMPLC - A to Z", "ANNUAL REPORT 2020-21 PPP - A to Z.pdf"],
          ],
          "Financial Year 2019-20" => [
            ["MMPLC Full Annual Report-2020 page - (1-44)", "PPP Full Annual Report-2020 page - (1-44).pdf"],
            ["MMPLC Full Annual Report-2020 (Audit & Account) Page- (45-51)", "PPP Full Annual Report-2020 (Audit & Account) Page- (45-51).pdf"],
            ["MMPLC Full Annual Report-2020 (Accounts) page - (52-80)", "PPP Full Annual Report-2020 (Accounts) page - (52-80).pdf"],
          ],
          "<b>Terms of Reference (TOR)<b/>" => [
            ["TOR of Audit Committee", "01. TOR of Audit Committee - PPP - Scan.pdf"],
            ["NRC - TOR - MMPLC - V1", "NRC - TOR - PPP - V1.pdf"],
          ],
          "<b>Code of Conduct<b/>" => [
            ["MMPLC - Code of Conduct", "PPP - Code of Conduct.pdf"],
          ],
        ];

        foreach ($data as $year => $documents) {
          $rowspan = count(value: $documents);
          $firstRow = true;
          foreach ($documents as $doc) {
            echo "<tr>";
            if ($firstRow) {
              echo "<td rowspan='$rowspan' class='text-center align-middle'>$year</td>";
              $firstRow = false;
            }
            echo "<td><a href='images/{$doc[1]}' target='_blank' rel='noopener noreferrer'>{$doc[0]}</a></td>";
            echo "</tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
