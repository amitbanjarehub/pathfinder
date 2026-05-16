<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test Result - {{ $test->title }}</title>
    <style>
        @page {
            margin: 15mm;
        }

        @page :first {
            margin: 0;
        }

        body {
            font-family: sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .cover-page {
            margin: 0;
            padding: 0;
        }

        .content-wrapper {
            padding: 0;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #3f2668;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #3f2668;
            margin: 0;
        }

        .meta {
            margin-bottom: 30px;
        }

        .meta table {
            width: 100%;
        }

        .meta td {
            padding: 5px;
            vertical-align: top;
        }

        .score-card {
            background-color: #f4f1f9;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 30px;
        }

        .score-card h2 {
            margin: 0;
            color: #3f2668;
            font-size: 24px;
        }

        .score-card .score {
            font-size: 48px;
            font-weight: bold;
            color: #3f2668;
            margin: 10px 0;
        }

        .section-scores {
            margin-bottom: 30px;
        }

        .section-scores table {
            width: 100%;
            border-collapse: collapse;
        }

        .section-scores th,
        .section-scores td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .section-scores th {
            background-color: #3f2668;
            color: white;
        }

        .chart {
            margin-top: 30px;
        }

        .bar-container {
            margin-bottom: 15px;
        }

        .bar-label {
            font-size: 12px;
            margin-bottom: 5px;
        }

        .bar-bg {
            background-color: #eee;
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
        }

        .bar-fill {
            background-color: #3f2668;
            height: 100%;
        }

        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Cover Page -->
    <div class="cover-page"
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; margin: 0; padding: 0; page-break-after: always;">
        <img src="{{ public_path('front-cover.jpeg') }}"
            style="width: 100%; height: auto; object-fit: cover; display: block;">
    </div>
    <div style="page-break-after: always;"></div>

    <div class="header">
        <h1>{{ $test->title }} Report Sheet</h1>
        {{-- <p>Test Result Report</p> --}}
    </div>

    <div class="meta">
        <table>
            <tr>
                <td width="50%">
                    <strong>Candidate Details:</strong><br>
                    Name: {{ $userDetails['name'] ?? 'N/A' }}<br>
                    Email: {{ $userDetails['email'] ?? 'N/A' }}<br>
                    @foreach ($userDetails as $key => $value)
                        @if (!in_array($key, ['name', 'email', 'role', 'profile']))
                            {{ ucfirst(str_replace('_', ' ', $key)) }}:
                            {{ is_array($value) ? implode(', ', $value) : $value }}<br>
                        @endif
                    @endforeach
                </td>
                <td width="50%" style="text-align: right;">
                    <strong>Test Details:</strong><br>
                    Date: {{ $attempt->created_at->format('M d, Y') }}<br>
                    Time: {{ $attempt->created_at->format('h:i A') }}<br>
                </td>
            </tr>
        </table>
    </div>

    <div class="score-card">
        <h2>Overall Score</h2>
        <div class="score">{{ $totalScore }} / {{ $maxTotalScore }}</div>
        <p>{{ number_format(($totalScore / ($maxTotalScore ?: 1)) * 100, 1) }}%</p>
    </div>

    <div class="section-scores">
        <h3>Section-wise Performance</h3>
        <table style="width: 100%; border-collapse: collapse; font-size: 11px;">
            <thead>
                <tr style="background-color: #5a9c37; color: white;">
                    <th style="padding: 10px 8px; text-align: center; border: 1px solid #4a8c27;">S. No.</th>
                    <th style="padding: 10px 8px; text-align: center; border: 1px solid #4a8c27;">Sub-Test</th>
                    <th style="padding: 10px 8px; text-align: center; border: 1px solid #4a8c27;">Score Obtained</th>
                    <th style="padding: 10px 8px; text-align: center; border: 1px solid #4a8c27;">Sten Score</th>
                    <th colspan="3" style="padding: 10px 8px; text-align: center; border: 1px solid #4a8c27;">
                        Performance</th>
                </tr>
                <tr style="background-color: #5a9c37; color: white;">
                    <th style="border: 1px solid #4a8c27;"></th>
                    <th style="border: 1px solid #4a8c27;"></th>
                    <th style="border: 1px solid #4a8c27;"></th>
                    <th style="border: 1px solid #4a8c27;"></th>
                    <th style="padding: 5px 8px; text-align: center; border: 1px solid #4a8c27;">High</th>
                    <th style="padding: 5px 8px; text-align: center; border: 1px solid #4a8c27;">Average</th>
                    <th style="padding: 5px 8px; text-align: center; border: 1px solid #4a8c27;">Low</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sectionScores as $index => $section)
                    @php
                        // Create abbreviation from section name
                        $words = explode(' ', $section['name']);
                        $abbr = '';
                        foreach ($words as $word) {
                            $abbr .= strtoupper(substr($word, 0, 1));
                        }
                        $abbr = substr($abbr, 0, 2);

                        // Determine performance level based on sten score
                        $stenScore = $section['sten_score'] ?? 0;
                        $isHigh = $stenScore >= 7;
                        $isAverage = $stenScore >= 4 && $stenScore <= 6;
                        $isLow = $stenScore >= 1 && $stenScore <= 3;

                        $rowBg = $index % 2 == 0 ? '#f0f7ec' : '#e5f2df';
                    @endphp
                    <tr style="background-color: {{ $rowBg }};">
                        <td
                            style="padding: 8px; text-align: center; border: 1px solid #d0e5c0; color: #2a6e2a; font-weight: bold;">
                            {{ $index + 1 }}.</td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0; font-weight: bold;">
                            {{ $abbr }}</td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0;">
                            {{ $section['score'] }}</td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0;">
                            {{ $section['sten_score'] ?? '-' }}</td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0;">
                            @if ($isHigh)
                                <div
                                    style="width: 12px; height: 12px; background-color: #2a6e2a; border-radius: 50%; margin: 0 auto;">
                                </div>
                            @endif
                        </td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0;">
                            @if ($isAverage)
                                <div
                                    style="width: 12px; height: 12px; background-color: #d4a017; border-radius: 50%; margin: 0 auto;">
                                </div>
                            @endif
                        </td>
                        <td style="padding: 8px; text-align: center; border: 1px solid #d0e5c0;">
                            @if ($isLow)
                                <div
                                    style="width: 12px; height: 12px; background-color: #c41e3a; border-radius: 50%; margin: 0 auto;">
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="chart">
        <h3>Performance Graphs</h3>

        <!-- Horizontal Bar Chart -->
        <h4>Score Distribution (Horizontal)</h4>
        @foreach ($sectionScores as $section)
            <div class="bar-container">
                <div class="bar-label">{{ $section['name'] }} ({{ number_format($section['percentage'], 1) }}%)</div>
                <div class="bar-bg">
                    <div class="bar-fill" style="width: {{ $section['percentage'] }}%;"></div>
                </div>
            </div>
        @endforeach

        <!-- Vertical Bar Chart -->
        <h4 style="margin-top: 20px;">Score Distribution (Vertical)</h4>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                @foreach ($sectionScores as $section)
                    <td style="text-align: center; vertical-align: bottom; height: 120px; padding: 0 5px;">
                        <div
                            style="width: 30px; margin: 0 auto; background-color: #3f2668; height: {{ max($section['percentage'], 5) }}px; border-radius: 3px 3px 0 0;">
                        </div>
                    </td>
                @endforeach
            </tr>
            <tr style="border-top: 1px solid #ddd;">
                @foreach ($sectionScores as $section)
                    <td style="text-align: center; padding-top: 8px; font-size: 9px; vertical-align: top;">
                        {{ Str::limit($section['name'], 12) }}<br>
                        <span
                            style="color: #3f2668; font-weight: bold;">{{ number_format($section['percentage'], 0) }}%</span>
                    </td>
                @endforeach
            </tr>
        </table>

        <h3>Some Occupations/Vocations and Related Aptitudes</h3>

        1.
        2.
        3.
        4.
        5.
        6.
        7.
        8.
        Accountant (Commerce / PCM)
        • Numerical Aptitude
        • Abstract Reasoning
        • Perceptual Aptitude
        Agricultural Scientist (Bio)
        • Abstract Reasoning
        • Numerical Aptitude
        • Mechanical Aptitude
        Language Aptitude
        Air Hostess (Commerce I Arts / All)
        Language Aptitude
        • Verbal Reasoning
        • Abstract Reasoning
        Air Traffic Control Officer (PCM)
        • Numerical Aptitude
        Abstract Reasoning
        Spatial Aptitude
        Language Aptitude
        Animator (Commerce / PCM)
        Spatial Aptitude
        • Abstract Reasoning
        • Verbal Reasoning
        Architect (PCM)
        • Numerical Aptitude
        • Mechanical Reasoning
        Spatial Aptitude
        • Abstract Reasoning
        Banker (Commerce / PCM)
        • Numerical Aptitude
        • Abstract Reasoning
        • Perceptual Aptitude
        Language Aptitude
        Beautician (Commerce / Arts)
        Language Aptitude


        <!-- Sten Score Profile Graph (Table-based for PDF) -->
        <h4 style="margin-top: 30px;">Sten Score Profile</h4>
        @php
            $abbreviations = [];
            $stenValues = [];
            foreach ($sectionScores as $section) {
                $words = explode(' ', $section['name']);
                $abbr = '';
                foreach ($words as $word) {
                    $abbr .= strtoupper(substr($word, 0, 1));
                }
                $abbreviations[] = substr($abbr, 0, 2);
                $stenValues[] = isset($section['sten_score']) ? intval($section['sten_score']) : 0;
            }
        @endphp

        <div style="margin-top: 10px;">
            <table style="width: 100%; border-collapse: collapse; border: 1px solid #ccc;">
                <!-- Y-axis labels and grid rows -->
                @for ($i = 10; $i >= 0; $i--)
                    <tr style="height: 16px;">
                        <td
                            style="width: 30px; text-align: right; padding-right: 5px; font-size: 9px; border-right: 2px solid #333; background-color: #f5f5f5;">
                            {{ $i }}
                        </td>
                        @foreach ($stenValues as $colIndex => $stenScore)
                            @php
                                $isThisScore = $stenScore == $i;
                                $cellBg = $i % 2 == 0 ? '#fafafa' : '#fff';
                            @endphp
                            <td
                                style="text-align: center; border-right: 1px solid #eee; border-bottom: 1px solid #eee; background-color: {{ $cellBg }}; position: relative;">
                                @if ($isThisScore)
                                    <div
                                        style="width: 10px; height: 10px; background-color: #3f2668; border-radius: 50%; margin: 0 auto; border: 2px solid white;">
                                    </div>
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endfor
                <!-- X-axis row with 0 -->
                <tr style="border-top: 2px solid #333;">
                    <td style="width: 30px; border-right: 2px solid #333; background-color: #f5f5f5;"></td>
                    @foreach ($abbreviations as $abbr)
                        <td
                            style="text-align: center; padding: 8px 5px; font-size: 10px; font-weight: bold; background-color: #f0f0f0;">
                            {{ $abbr }}
                        </td>
                    @endforeach
                </tr>
            </table>
            <p style="text-align: center; font-size: 10px; margin-top: 5px; color: #666;">Name of Sub-tests</p>
        </div>

        <!-- Sten Score Legend -->
        <div style="margin-top: 15px; padding: 10px; background-color: #f9f9f9; border: 1px solid #ddd;">
            <p style="font-size: 10px; margin: 0 0 5px 0;"><strong>Legend:</strong></p>
            <table style="width: 100%; font-size: 9px;">
                <tr>
                    @foreach ($sectionScores as $section)
                        @php
                            $words = explode(' ', $section['name']);
                            $abbr = '';
                            foreach ($words as $word) {
                                $abbr .= strtoupper(substr($word, 0, 1));
                            }
                            $abbr = substr($abbr, 0, 2);
                        @endphp
                        <td style="padding: 2px 5px;">
                            <strong>{{ $abbr }}</strong> = {{ Str::limit($section['name'], 12) }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    <div class="footer">
        <p>Generated by Pathfinder Assessment System</p>
    </div>
</body>

</html>
