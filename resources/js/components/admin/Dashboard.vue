<template>
  <div class="main-content-inner">
    <div class="main-content-wrap">
      <div class="tf-section-4 mb-30" v-if="role != 'candidate'">
        <!-- chart-default -->
        <div class="wg-chart-default">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
              <div class="image type-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="48"
                  height="52"
                  viewBox="0 0 48 52"
                  fill="none"
                >
                  <path
                    d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                    fill="#22C55E"
                  ></path>
                </svg>
                <i class="icon-shopping-bag"></i>
              </div>
              <div>
                <div class="body-text mb-2">Total Active Jobs</div>
                <h4>{{ stats.active_jobs }}</h4>
              </div>
            </div>
            <div class="box-icon-trending up">
              <i class="icon-trending-up"></i>
              <div class="body-title number"></div>
            </div>
          </div>
          <div class="wrap-chart">
            <div id="line-chart-1" style="min-height: 28px">
              <div
                id="apexchartspvzgld8d"
                class="apexcharts-canvas apexchartspvzgld8d apexcharts-theme-light"
                style="width: 328px; height: 28px"
              >
                <svg
                  id="SvgjsSvg1384"
                  width="328"
                  height="28"
                  xmlns="http://www.w3.org/2000/svg"
                  version="1.1"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:svgjs="http://svgjs.dev"
                  class="apexcharts-svg"
                  xmlns:data="ApexChartsNS"
                  transform="translate(0, 0)"
                  style="background: transparent"
                >
                  <foreignObject x="0" y="0" width="328" height="28"
                    ><div
                      class="apexcharts-legend"
                      xmlns="http://www.w3.org/1999/xhtml"
                      style="max-height: 14px"
                    ></div
                  ></foreignObject>
                  <rect
                    id="SvgjsRect1388"
                    width="0"
                    height="0"
                    x="0"
                    y="0"
                    rx="0"
                    ry="0"
                    opacity="1"
                    stroke-width="0"
                    stroke="none"
                    stroke-dasharray="0"
                    fill="#fefefe"
                  ></rect>
                  <g
                    id="SvgjsG1425"
                    class="apexcharts-yaxis"
                    rel="0"
                    transform="translate(-18, 0)"
                  ></g>
                  <g
                    id="SvgjsG1386"
                    class="apexcharts-inner apexcharts-graphical"
                    transform="translate(0, 1.5)"
                  >
                    <defs id="SvgjsDefs1385">
                      <clipPath id="gridRectMaskpvzgld8d">
                        <rect
                          id="SvgjsRect1390"
                          width="335"
                          height="41"
                          x="-5"
                          y="-8"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <clipPath id="forecastMaskpvzgld8d"></clipPath>
                      <clipPath id="nonForecastMaskpvzgld8d"></clipPath>
                      <clipPath id="gridRectMarkerMaskpvzgld8d">
                        <rect
                          id="SvgjsRect1391"
                          width="332"
                          height="29"
                          x="-2"
                          y="-2"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <linearGradient
                        id="SvgjsLinearGradient1396"
                        x1="0"
                        y1="0"
                        x2="0"
                        y2="1"
                      >
                        <stop
                          id="SvgjsStop1397"
                          stop-opacity="0.65"
                          stop-color="rgba(34,197,94,0.65)"
                          offset="0"
                        ></stop>
                        <stop
                          id="SvgjsStop1398"
                          stop-opacity="0.5"
                          stop-color="rgba(145,226,175,0.5)"
                          offset="1"
                        ></stop>
                        <stop
                          id="SvgjsStop1399"
                          stop-opacity="0.5"
                          stop-color="rgba(145,226,175,0.5)"
                          offset="1"
                        ></stop>
                      </linearGradient>
                    </defs>
                    <line
                      id="SvgjsLine1389"
                      x1="0"
                      y1="0"
                      x2="0"
                      y2="25"
                      stroke="#b6b6b6"
                      stroke-dasharray="3"
                      stroke-linecap="butt"
                      class="apexcharts-xcrosshairs"
                      x="0"
                      y="0"
                      width="1"
                      height="25"
                      fill="#b1b9c4"
                      filter="none"
                      fill-opacity="0.9"
                      stroke-width="1"
                    ></line>
                    <g id="SvgjsG1402" class="apexcharts-grid">
                      <g
                        id="SvgjsG1403"
                        class="apexcharts-gridlines-horizontal"
                        style="display: none"
                      >
                        <line
                          id="SvgjsLine1406"
                          x1="0"
                          y1="0"
                          x2="328"
                          y2="0"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1407"
                          x1="0"
                          y1="5"
                          x2="328"
                          y2="5"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1408"
                          x1="0"
                          y1="10"
                          x2="328"
                          y2="10"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1409"
                          x1="0"
                          y1="15"
                          x2="328"
                          y2="15"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1410"
                          x1="0"
                          y1="20"
                          x2="328"
                          y2="20"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1411"
                          x1="0"
                          y1="25"
                          x2="328"
                          y2="25"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG1404"
                        class="apexcharts-gridlines-vertical"
                        style="display: none"
                      ></g>
                      <line
                        id="SvgjsLine1413"
                        x1="0"
                        y1="25"
                        x2="328"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                      <line
                        id="SvgjsLine1412"
                        x1="0"
                        y1="1"
                        x2="0"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG1405"
                      class="apexcharts-grid-borders"
                      style="display: none"
                    ></g>
                    <g
                      id="SvgjsG1392"
                      class="apexcharts-area-series apexcharts-plot-series"
                    >
                      <g
                        id="SvgjsG1393"
                        class="apexcharts-series"
                        zIndex="0"
                        seriesName="series-1"
                        data:longestSeries="true"
                        rel="1"
                        data:realIndex="0"
                      >
                        <path
                          id="SvgjsPath1400"
                          d="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          fill="url(#SvgjsLinearGradient1396)"
                          fill-opacity="1"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="0"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMaskpvzgld8d)"
                          pathTo="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                        ></path>
                        <path
                          id="SvgjsPath1401"
                          d="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          fill="none"
                          fill-opacity="1"
                          stroke="#22c55e"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="3"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMaskpvzgld8d)"
                          pathTo="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                          fill-rule="evenodd"
                        ></path>
                        <g
                          id="SvgjsG1394"
                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                          data:realIndex="0"
                        >
                          <g class="apexcharts-series-markers">
                            <circle
                              id="SvgjsCircle1429"
                              r="0"
                              cx="0"
                              cy="0"
                              class="apexcharts-marker w119ql48n no-pointer-events"
                              stroke="#ffffff"
                              fill="#22c55e"
                              fill-opacity="1"
                              stroke-width="2"
                              stroke-opacity="0.9"
                              default-marker-size="0"
                            ></circle>
                          </g>
                        </g>
                      </g>
                      <g
                        id="SvgjsG1395"
                        class="apexcharts-datalabels"
                        data:realIndex="0"
                      ></g>
                    </g>
                    <line
                      id="SvgjsLine1414"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke="#b6b6b6"
                      stroke-dasharray="0"
                      stroke-width="1"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs"
                    ></line>
                    <line
                      id="SvgjsLine1415"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke-dasharray="0"
                      stroke-width="0"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs-hidden"
                    ></line>
                    <g
                      id="SvgjsG1416"
                      class="apexcharts-xaxis"
                      transform="translate(0, 0)"
                    >
                      <g
                        id="SvgjsG1417"
                        class="apexcharts-xaxis-texts-g"
                        transform="translate(0, -4)"
                      ></g>
                    </g>
                    <g id="SvgjsG1426" class="apexcharts-yaxis-annotations"></g>
                    <g id="SvgjsG1427" class="apexcharts-xaxis-annotations"></g>
                    <g id="SvgjsG1428" class="apexcharts-point-annotations"></g>
                  </g>
                </svg>
                <div class="apexcharts-tooltip apexcharts-theme-light">
                  <div class="apexcharts-tooltip-series-group" style="order: 1">
                    <span
                      class="apexcharts-tooltip-marker"
                      style="background-color: rgb(34, 197, 94)"
                    ></span>
                    <div
                      class="apexcharts-tooltip-text"
                      style="
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 12px;
                      "
                    >
                      <div class="apexcharts-tooltip-y-group">
                        <span class="apexcharts-tooltip-text-y-label"></span
                        ><span class="apexcharts-tooltip-text-y-value"></span>
                      </div>
                      <div class="apexcharts-tooltip-goals-group">
                        <span class="apexcharts-tooltip-text-goals-label"></span
                        ><span
                          class="apexcharts-tooltip-text-goals-value"
                        ></span>
                      </div>
                      <div class="apexcharts-tooltip-z-group">
                        <span class="apexcharts-tooltip-text-z-label"></span
                        ><span class="apexcharts-tooltip-text-z-value"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                >
                  <div class="apexcharts-yaxistooltip-text"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="wg-chart-default">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
              <div class="image type-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="48"
                  height="52"
                  viewBox="0 0 48 52"
                  fill="none"
                >
                  <path
                    d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                    fill="#FF5200"
                  ></path>
                </svg>
                <i class="icon-dollar-sign"></i>
              </div>
              <div>
                <div class="body-text mb-2">Total Applications On Active Jobs </div>
                <h4>{{ stats.applications_on_active_jobs }}</h4>
              </div>
            </div>
            <div class="box-icon-trending down">
              <i class="icon-trending-down"></i>
              <div class="body-title number"></div>
            </div>
          </div>
          <div class="wrap-chart">
            <div id="line-chart-2" style="min-height: 28px">
              <div
                id="apexchartsmzzgj1sw"
                class="apexcharts-canvas apexchartsmzzgj1sw apexcharts-theme-light"
                style="width: 328px; height: 28px"
              >
                <svg
                  id="SvgjsSvg1431"
                  width="328"
                  height="28"
                  xmlns="http://www.w3.org/2000/svg"
                  version="1.1"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:svgjs="http://svgjs.dev"
                  class="apexcharts-svg"
                  xmlns:data="ApexChartsNS"
                  transform="translate(0, 0)"
                  style="background: transparent"
                >
                  <foreignObject x="0" y="0" width="328" height="28"
                    ><div
                      class="apexcharts-legend"
                      xmlns="http://www.w3.org/1999/xhtml"
                      style="max-height: 14px"
                    ></div
                  ></foreignObject>
                  <rect
                    id="SvgjsRect1435"
                    width="0"
                    height="0"
                    x="0"
                    y="0"
                    rx="0"
                    ry="0"
                    opacity="1"
                    stroke-width="0"
                    stroke="none"
                    stroke-dasharray="0"
                    fill="#fefefe"
                  ></rect>
                  <g
                    id="SvgjsG1472"
                    class="apexcharts-yaxis"
                    rel="0"
                    transform="translate(-18, 0)"
                  ></g>
                  <g
                    id="SvgjsG1433"
                    class="apexcharts-inner apexcharts-graphical"
                    transform="translate(0, 1.5)"
                  >
                    <defs id="SvgjsDefs1432">
                      <clipPath id="gridRectMaskmzzgj1sw">
                        <rect
                          id="SvgjsRect1437"
                          width="335"
                          height="41"
                          x="-5"
                          y="-8"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <clipPath id="forecastMaskmzzgj1sw"></clipPath>
                      <clipPath id="nonForecastMaskmzzgj1sw"></clipPath>
                      <clipPath id="gridRectMarkerMaskmzzgj1sw">
                        <rect
                          id="SvgjsRect1438"
                          width="332"
                          height="29"
                          x="-2"
                          y="-2"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <linearGradient
                        id="SvgjsLinearGradient1443"
                        x1="0"
                        y1="0"
                        x2="0"
                        y2="1"
                      >
                        <stop
                          id="SvgjsStop1444"
                          stop-opacity="0.65"
                          stop-color="rgba(255,82,0,0.65)"
                          offset="0"
                        ></stop>
                        <stop
                          id="SvgjsStop1445"
                          stop-opacity="0.5"
                          stop-color="rgba(255,169,128,0.5)"
                          offset="1"
                        ></stop>
                        <stop
                          id="SvgjsStop1446"
                          stop-opacity="0.5"
                          stop-color="rgba(255,169,128,0.5)"
                          offset="1"
                        ></stop>
                      </linearGradient>
                    </defs>
                    <line
                      id="SvgjsLine1436"
                      x1="54.16666666666667"
                      y1="0"
                      x2="54.16666666666667"
                      y2="25"
                      stroke="#b6b6b6"
                      stroke-dasharray="3"
                      stroke-linecap="butt"
                      class="apexcharts-xcrosshairs"
                      x="54.16666666666667"
                      y="0"
                      width="1"
                      height="25"
                      fill="#b1b9c4"
                      filter="none"
                      fill-opacity="0.9"
                      stroke-width="1"
                    ></line>
                    <g id="SvgjsG1449" class="apexcharts-grid">
                      <g
                        id="SvgjsG1450"
                        class="apexcharts-gridlines-horizontal"
                        style="display: none"
                      >
                        <line
                          id="SvgjsLine1453"
                          x1="0"
                          y1="0"
                          x2="328"
                          y2="0"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1454"
                          x1="0"
                          y1="5"
                          x2="328"
                          y2="5"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1455"
                          x1="0"
                          y1="10"
                          x2="328"
                          y2="10"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1456"
                          x1="0"
                          y1="15"
                          x2="328"
                          y2="15"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1457"
                          x1="0"
                          y1="20"
                          x2="328"
                          y2="20"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1458"
                          x1="0"
                          y1="25"
                          x2="328"
                          y2="25"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG1451"
                        class="apexcharts-gridlines-vertical"
                        style="display: none"
                      ></g>
                      <line
                        id="SvgjsLine1460"
                        x1="0"
                        y1="25"
                        x2="328"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                      <line
                        id="SvgjsLine1459"
                        x1="0"
                        y1="1"
                        x2="0"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG1452"
                      class="apexcharts-grid-borders"
                      style="display: none"
                    ></g>
                    <g
                      id="SvgjsG1439"
                      class="apexcharts-area-series apexcharts-plot-series"
                    >
                      <g
                        id="SvgjsG1440"
                        class="apexcharts-series"
                        zIndex="0"
                        seriesName="series-1"
                        data:longestSeries="true"
                        rel="1"
                        data:realIndex="0"
                      >
                        <path
                          id="SvgjsPath1447"
                          d="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          fill="url(#SvgjsLinearGradient1443)"
                          fill-opacity="1"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="0"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMaskmzzgj1sw)"
                          pathTo="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                        ></path>
                        <path
                          id="SvgjsPath1448"
                          d="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          fill="none"
                          fill-opacity="1"
                          stroke="#ff5200"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="3"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMaskmzzgj1sw)"
                          pathTo="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                          fill-rule="evenodd"
                        ></path>
                        <g
                          id="SvgjsG1441"
                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                          data:realIndex="0"
                        >
                          <g class="apexcharts-series-markers">
                            <circle
                              id="SvgjsCircle1476"
                              r="0"
                              cx="54.66666666666667"
                              cy="12.5"
                              class="apexcharts-marker wxfs4t38s no-pointer-events"
                              stroke="#ffffff"
                              fill="#ff5200"
                              fill-opacity="1"
                              stroke-width="2"
                              stroke-opacity="0.9"
                              default-marker-size="0"
                            ></circle>
                          </g>
                        </g>
                      </g>
                      <g
                        id="SvgjsG1442"
                        class="apexcharts-datalabels"
                        data:realIndex="0"
                      ></g>
                    </g>
                    <line
                      id="SvgjsLine1461"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke="#b6b6b6"
                      stroke-dasharray="0"
                      stroke-width="1"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs"
                    ></line>
                    <line
                      id="SvgjsLine1462"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke-dasharray="0"
                      stroke-width="0"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs-hidden"
                    ></line>
                    <g
                      id="SvgjsG1463"
                      class="apexcharts-xaxis"
                      transform="translate(0, 0)"
                    >
                      <g
                        id="SvgjsG1464"
                        class="apexcharts-xaxis-texts-g"
                        transform="translate(0, -4)"
                      ></g>
                    </g>
                    <g id="SvgjsG1473" class="apexcharts-yaxis-annotations"></g>
                    <g id="SvgjsG1474" class="apexcharts-xaxis-annotations"></g>
                    <g id="SvgjsG1475" class="apexcharts-point-annotations"></g>
                  </g>
                </svg>
                <div
                  class="apexcharts-tooltip apexcharts-theme-light"
                  style="left: 65.6667px; top: -2.5px"
                >
                  <div
                    class="apexcharts-tooltip-series-group apexcharts-active"
                    style="order: 1; display: flex"
                  >
                    <span
                      class="apexcharts-tooltip-marker"
                      style="background-color: rgb(255, 82, 0); display: block"
                    ></span>
                    <div
                      class="apexcharts-tooltip-text"
                      style="
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 12px;
                        display: block;
                      "
                    >
                      <div class="apexcharts-tooltip-y-group">
                        <span class="apexcharts-tooltip-text-y-label"></span
                        ><span class="apexcharts-tooltip-text-y-value">50</span>
                      </div>
                      <div class="apexcharts-tooltip-goals-group">
                        <span class="apexcharts-tooltip-text-goals-label"></span
                        ><span
                          class="apexcharts-tooltip-text-goals-value"
                        ></span>
                      </div>
                      <div class="apexcharts-tooltip-z-group">
                        <span class="apexcharts-tooltip-text-z-label"></span
                        ><span class="apexcharts-tooltip-text-z-value"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                >
                  <div class="apexcharts-yaxistooltip-text"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="wg-chart-default">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
              <div class="image type-white">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="48"
                  height="52"
                  viewBox="0 0 48 52"
                  fill="none"
                >
                  <path
                    d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z"
                    fill="#CBD5E1"
                  ></path>
                </svg>
                <i class="icon-file"></i>
              </div>
              <div>
                <div class="body-text mb-2">Total Applicants </div>
                <h4>{{ stats.total_users}}</h4>
              </div>
            </div>
            <div class="box-icon-trending">
              <i class="icon-trending-up"></i>
              <div class="body-title number"></div>
            </div>
          </div>
          <div class="wrap-chart">
            <div id="line-chart-3" style="min-height: 28px">
              <div
                id="apexcharts2et2fa32"
                class="apexcharts-canvas apexcharts2et2fa32 apexcharts-theme-light"
                style="width: 328px; height: 28px"
              >
                <svg
                  id="SvgjsSvg1478"
                  width="328"
                  height="28"
                  xmlns="http://www.w3.org/2000/svg"
                  version="1.1"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:svgjs="http://svgjs.dev"
                  class="apexcharts-svg"
                  xmlns:data="ApexChartsNS"
                  transform="translate(0, 0)"
                  style="background: transparent"
                >
                  <foreignObject x="0" y="0" width="328" height="28"
                    ><div
                      class="apexcharts-legend"
                      xmlns="http://www.w3.org/1999/xhtml"
                      style="max-height: 14px"
                    ></div
                  ></foreignObject>
                  <rect
                    id="SvgjsRect1482"
                    width="0"
                    height="0"
                    x="0"
                    y="0"
                    rx="0"
                    ry="0"
                    opacity="1"
                    stroke-width="0"
                    stroke="none"
                    stroke-dasharray="0"
                    fill="#fefefe"
                  ></rect>
                  <g
                    id="SvgjsG1519"
                    class="apexcharts-yaxis"
                    rel="0"
                    transform="translate(-18, 0)"
                  ></g>
                  <g
                    id="SvgjsG1480"
                    class="apexcharts-inner apexcharts-graphical"
                    transform="translate(0, 1.5)"
                  >
                    <defs id="SvgjsDefs1479">
                      <clipPath id="gridRectMask2et2fa32">
                        <rect
                          id="SvgjsRect1484"
                          width="335"
                          height="41"
                          x="-5"
                          y="-8"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <clipPath id="forecastMask2et2fa32"></clipPath>
                      <clipPath id="nonForecastMask2et2fa32"></clipPath>
                      <clipPath id="gridRectMarkerMask2et2fa32">
                        <rect
                          id="SvgjsRect1485"
                          width="332"
                          height="29"
                          x="-2"
                          y="-2"
                          rx="0"
                          ry="0"
                          opacity="1"
                          stroke-width="0"
                          stroke="none"
                          stroke-dasharray="0"
                          fill="#fff"
                        ></rect>
                      </clipPath>
                      <linearGradient
                        id="SvgjsLinearGradient1490"
                        x1="0"
                        y1="0"
                        x2="0"
                        y2="1"
                      >
                        <stop
                          id="SvgjsStop1491"
                          stop-opacity="0.65"
                          stop-color="rgba(203,213,225,0.65)"
                          offset="0"
                        ></stop>
                        <stop
                          id="SvgjsStop1492"
                          stop-opacity="0.5"
                          stop-color="rgba(229,234,240,0.5)"
                          offset="1"
                        ></stop>
                        <stop
                          id="SvgjsStop1493"
                          stop-opacity="0.5"
                          stop-color="rgba(229,234,240,0.5)"
                          offset="1"
                        ></stop>
                      </linearGradient>
                    </defs>
                    <line
                      id="SvgjsLine1483"
                      x1="108.83333333333334"
                      y1="0"
                      x2="108.83333333333334"
                      y2="25"
                      stroke="#b6b6b6"
                      stroke-dasharray="3"
                      stroke-linecap="butt"
                      class="apexcharts-xcrosshairs"
                      x="108.83333333333334"
                      y="0"
                      width="1"
                      height="25"
                      fill="#b1b9c4"
                      filter="none"
                      fill-opacity="0.9"
                      stroke-width="1"
                    ></line>
                    <g id="SvgjsG1496" class="apexcharts-grid">
                      <g
                        id="SvgjsG1497"
                        class="apexcharts-gridlines-horizontal"
                        style="display: none"
                      >
                        <line
                          id="SvgjsLine1500"
                          x1="0"
                          y1="0"
                          x2="328"
                          y2="0"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1501"
                          x1="0"
                          y1="5"
                          x2="328"
                          y2="5"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1502"
                          x1="0"
                          y1="10"
                          x2="328"
                          y2="10"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1503"
                          x1="0"
                          y1="15"
                          x2="328"
                          y2="15"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1504"
                          x1="0"
                          y1="20"
                          x2="328"
                          y2="20"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                        <line
                          id="SvgjsLine1505"
                          x1="0"
                          y1="25"
                          x2="328"
                          y2="25"
                          stroke="#e0e0e0"
                          stroke-dasharray="0"
                          stroke-linecap="butt"
                          class="apexcharts-gridline"
                        ></line>
                      </g>
                      <g
                        id="SvgjsG1498"
                        class="apexcharts-gridlines-vertical"
                        style="display: none"
                      ></g>
                      <line
                        id="SvgjsLine1507"
                        x1="0"
                        y1="25"
                        x2="328"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                      <line
                        id="SvgjsLine1506"
                        x1="0"
                        y1="1"
                        x2="0"
                        y2="25"
                        stroke="transparent"
                        stroke-dasharray="0"
                        stroke-linecap="butt"
                      ></line>
                    </g>
                    <g
                      id="SvgjsG1499"
                      class="apexcharts-grid-borders"
                      style="display: none"
                    ></g>
                    <g
                      id="SvgjsG1486"
                      class="apexcharts-area-series apexcharts-plot-series"
                    >
                      <g
                        id="SvgjsG1487"
                        class="apexcharts-series"
                        zIndex="0"
                        seriesName="series-1"
                        data:longestSeries="true"
                        rel="1"
                        data:realIndex="0"
                      >
                        <path
                          id="SvgjsPath1494"
                          d="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          fill="url(#SvgjsLinearGradient1490)"
                          fill-opacity="1"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="0"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMask2et2fa32)"
                          pathTo="M 0 25 L 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0 L 328 25 L 0 25M 0 20z"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                        ></path>
                        <path
                          id="SvgjsPath1495"
                          d="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          fill="none"
                          fill-opacity="1"
                          stroke="#cbd5e1"
                          stroke-opacity="1"
                          stroke-linecap="butt"
                          stroke-width="3"
                          stroke-dasharray="0"
                          class="apexcharts-area"
                          index="0"
                          clip-path="url(#gridRectMask2et2fa32)"
                          pathTo="M 0 20C8.942785517409863, 18.773093450355354, 36.46053160159258, 11.958811533888804, 54.66666666666667, 12.5S91.34622388496015, 25.30645306193291, 109.33333333333334, 23.25S145.8280389148465, 0.9556900265820079, 164, 0S200.48247466455595, 16.66840585356201, 218.66666666666669, 17.5S255.56629405659115, 7.843809640332214, 273.33333333333337, 5S318.96447607225235, 0.8264198714403354, 328, 0"
                          pathFrom="M -1 25 L -1 25 L 54.66666666666667 25 L 109.33333333333334 25 L 164 25 L 218.66666666666669 25 L 273.33333333333337 25 L 328 25"
                          fill-rule="evenodd"
                        ></path>
                        <g
                          id="SvgjsG1488"
                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                          data:realIndex="0"
                        >
                          <g class="apexcharts-series-markers">
                            <circle
                              id="SvgjsCircle1523"
                              r="0"
                              cx="109.33333333333334"
                              cy="23.25"
                              class="apexcharts-marker wj7ktfd7g no-pointer-events"
                              stroke="#ffffff"
                              fill="#cbd5e1"
                              fill-opacity="1"
                              stroke-width="2"
                              stroke-opacity="0.9"
                              default-marker-size="0"
                            ></circle>
                          </g>
                        </g>
                      </g>
                      <g
                        id="SvgjsG1489"
                        class="apexcharts-datalabels"
                        data:realIndex="0"
                      ></g>
                    </g>
                    <line
                      id="SvgjsLine1508"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke="#b6b6b6"
                      stroke-dasharray="0"
                      stroke-width="1"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs"
                    ></line>
                    <line
                      id="SvgjsLine1509"
                      x1="0"
                      y1="0"
                      x2="328"
                      y2="0"
                      stroke-dasharray="0"
                      stroke-width="0"
                      stroke-linecap="butt"
                      class="apexcharts-ycrosshairs-hidden"
                    ></line>
                    <g
                      id="SvgjsG1510"
                      class="apexcharts-xaxis"
                      transform="translate(0, 0)"
                    >
                      <g
                        id="SvgjsG1511"
                        class="apexcharts-xaxis-texts-g"
                        transform="translate(0, -4)"
                      ></g>
                    </g>
                    <g id="SvgjsG1520" class="apexcharts-yaxis-annotations"></g>
                    <g id="SvgjsG1521" class="apexcharts-xaxis-annotations"></g>
                    <g id="SvgjsG1522" class="apexcharts-point-annotations"></g>
                  </g>
                </svg>
                <div
                  class="apexcharts-tooltip apexcharts-theme-light"
                  style="left: 120.333px; top: -2.5px"
                >
                  <div
                    class="apexcharts-tooltip-series-group apexcharts-active"
                    style="order: 1; display: flex"
                  >
                    <span
                      class="apexcharts-tooltip-marker"
                      style="
                        background-color: rgb(203, 213, 225);
                        display: block;
                      "
                    ></span>
                    <div
                      class="apexcharts-tooltip-text"
                      style="
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 12px;
                        display: block;
                      "
                    >
                      <div class="apexcharts-tooltip-y-group">
                        <span class="apexcharts-tooltip-text-y-label"></span
                        ><span class="apexcharts-tooltip-text-y-value">7</span>
                      </div>
                      <div class="apexcharts-tooltip-goals-group">
                        <span class="apexcharts-tooltip-text-goals-label"></span
                        ><span
                          class="apexcharts-tooltip-text-goals-value"
                        ></span>
                      </div>
                      <div class="apexcharts-tooltip-z-group">
                        <span class="apexcharts-tooltip-text-z-label"></span
                        ><span class="apexcharts-tooltip-text-z-value"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                >
                  <div class="apexcharts-yaxistooltip-text"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
import { useToast } from "vue-toastification";
import api from "../../helpers/axios";

export default {
  name: "AdminComponent",
  data() {
    return {
      stats: [],
      role:localStorage.getItem('role')
    };
  },
  mounted() {
    this.getStats();
  },
  methods: {
    getStats() {
      api
        .get("/stats")
        .then((response) => {
          this.stats = response.data;
        })
        .catch((error) => {
          console.error("Error fetching skills:", error);
        });
    },
  },
};
</script>
