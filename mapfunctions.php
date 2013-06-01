<?php

function getHighestPercentagePartyId($mapData) {
  $highestPartyIds = array();

  // loop through all states
  foreach ($mapData as $poll) {

    $highestPercentage = -100;
    $partyId = '';
    // loop through every party of results
    foreach ($poll->results as $result) {
      if ($result->percentage > $highestPercentage) {
        $highestPercentage = $result->percentage;
        $partyId = $result->partyId;
      }
    }

    $highestPartyIds[$poll->pollId] = $partyId;
  }
  return $highestPartyIds;
}

function printMap($highestPartyIds) {
?>
<div class="map">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 830 450" preserveAspectRatio="xMinYMin meet">
        <a xlink:href="http://neuwal.com/wahlumfragen/burgenland" target="_parent"><path class="<?php echo $highestPartyIds['burgenland']; ?>" id="burgenland" d="M804.045,137.46l-2.848,2.846l-2.74,2.74l-1.053-1.265l-4.637,1.687l1.264,3.583l-0.209,3.372l-1.266,1.688l-2.318-1.688l-4.215-2.951h-3.584l-3.371,2.951l-2.529,3.583l-4.428,2.53l-4.004,1.687l-3.162,1.688l-0.211,4.637l-0.844,2.53l-3.162,1.687l-2.74,1.266v3.583l-2.105,1.896l-2.951,2.318l-2.109-2.107l-4.004-2.529l-2.527,0.843l-5.271,1.053l-2.949,2.53l-1.477,2.107l-2.949,4.216l0.631,3.372l0.633,4.005l-1.896,3.162v2.949l-2.74-0.422l-2.529,2.318v4.849l0.844,3.583l0.633,1.896l1.896,2.951l2.316,1.896l3.584,3.583l1.475,1.897l0.211,2.317l-1.896,2.318v2.529l-0.842,2.317l-2.109,1.687l-0.422,2.528l0.211,4.217l3.373,3.373l-1.266,3.371l-2.951,3.371l-3.371,2.74l-3.584,3.162l-4.004,0.422l-4.85,0.422l0.211,0.211l-2.949,4.848l-3.164,4.429l-2.316-4.64h-2.107v1.688l-0.211,2.74l-1.688,1.053l1.475,4.637l1.898,4.639l1.264,3.582l2.109,4.638l0.842,4.85l0.211,4.004l1.688,2.951l1.896,2.529l0.209,2.317v3.584l-1.264,4.849l0.631,3.795l3.373,3.582l3.584,2.317l-0.211,4.218l-2.109,3.159l-2.316,4.218l-2.318,3.793l-1.688,3.37l-1.477,0.212l-3.16,2.528l0.42,5.48l1.477,2.106l2.318,2.109v2.529v0.327l2.318-1.594l4.006-3.162l4.004-1.053l4.006-6.113l2.107-2.737l0.844-3.373l3.793-0.42l0.844-1.898l0.844-2.74l2.107-2.106l0.844-2.529l0.422-2.529l1.475,1.265h1.688l3.582-1.476l2.74,0.845l2.531-1.478l3.16,1.898l1.896-1.478l1.688,0.423l4.006-0.212l1.053-1.053l-1.053-1.477l-2.951-0.842h-3.584l0.633-2.318l5.27-2.318l1.475-2.95h-3.16l-2.316-4.005l1.895-2.108l1.688-1.896l1.264-0.844l1.055-2.318l-1.475-1.896l-2.74,0.211l-3.793,2.74l-1.055-3.795l1.264-1.687l-1.264-2.317h-1.688l-1.475-3.162l1.475-2.318l0.211-6.324l-0.211-4.004l1.688-2.951l-0.211-5.27l-2.951-0.633l0.633-5.9l-1.266-4.006l1.055-2.107h1.896l2.949,2.951l2.529-2.951l4.85-0.211l6.955-6.532l2.529-3.162l-1.055-2.74l-0.842-3.162l2.951-1.266l2.316-1.896l-0.211-3.582l-4.637-2.951l-0.422-5.901l-4.215-3.583l-3.584,1.476l-8.221-3.162l-2.949,1.055l-7.377-2.95l2.107-3.162h2.74l2.107-3.583l5.059-2.74l-1.477-3.794l1.055-2.318h4.637l3.373-1.687l3.371,2.529l3.584-0.21l0.631,1.476h1.898l1.686,1.053l1.266,3.372l2.74,1.477l7.797,2.107l2.531-7.377l2.529,4.005l14.965-4.427l6.111-0.21l-2.529-4.215l0.211-6.324l-2.318-2.529l-0.211-1.896l1.055-2.318l-1.266-2.317l-5.27-3.793v-1.267l4.848-1.053l3.584-4.215l-0.422-6.534l1.053-3.583l-0.844-2.318l4.85-6.956l-1.688-2.107l-6.111-0.21l-1.053-4.849l-0.211-4.848l-0.633-3.162l-1.146-1.412" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/kaernten" target="_parent"><path class="<?php echo $highestPartyIds['kaernten']; ?>" id="kaernten" d="M346.512,332.052l2.107-1.688l0.632-3.162l5.271,2.531l2.951,1.896l3.372,2.107l5.059,0.633l6.113,0.842h4.215l4.638,2.529l4.638,2.53l4.637,2.74l5.059-1.055h3.793l4.428,0.422l5.059-1.898l3.161-0.631l0.844-2.95l2.107-4.216l4.638-1.266l3.373,1.266l3.793,2.109l4.637,0.42l4.637,0.211h3.373l4.426,1.475l2.109,0.845l5.059-0.211h3.793l2.318,1.477l2.529,2.529l2.74,2.317l3.371,1.476l4.637,3.373l0.633-0.211l2.74,4.426l2.951,2.109l2.316,1.055l4.637-2.109l1.266-2.948l3.373-2.951l2.951-1.478l1.475-2.739l1.475-2.949l2.531-2.318l3.16-1.266l3.373-2.107l3.371-1.688l2.529-1.265l2.742-0.422h1.475l1.896-0.633l1.896-0.422l1.264,2.109l1.477,2.528l2.74,0.633l2.951-0.211l4.215-0.422l1.266-0.422l1.686,4.006l1.477,0.842h2.74l2.738-1.475l2.107-1.896l2.109-1.476h1.686l1.896-0.633l5.27-0.211l1.898-1.055h1.895l2.529,0.633h1.896l2.531-0.842h2.318l3.16-0.211l2.951-0.423l2.316-0.211h2.74l2.109-0.631l3.795-1.477l2.527-0.844l2.529,2.528l3.373,1.688l2.107,2.528l2.318,3.795l2.318,3.16l3.162,4.006l1.686,2.529l0.211,3.795l-1.896,3.371l-0.844,2.74l0.633,3.373l1.264,2.317l1.477,1.687l1.266,3.795v5.059l0.633,4.849l0.42,1.686l2.74,1.055l3.584,2.951l2.877,1.66l-0.77,0.658l-7.377,1.686l-2.318,4.638l-1.266,2.108l-4.215-4.428l-2.529,3.584l-6.111,0.631l-4.637,16.65l-8.643,1.897l-2.318,5.689l-2.74,0.422l-1.896,3.162l-8.01,2.318v5.479l-1.896,3.162l-6.111-5.691l-1.896,1.898l-2.949-1.267l-2.529-1.686l-2.531-2.74l-7.799,1.687l-4.215,1.475l-2.949-1.475l-6.746,1.055l-7.166,1.053l-4.637-6.746l-6.957-0.842l-6.322,0.42l-7.799-5.268l-7.166,0.209l-5.061,2.951l-9.271-0.845l-10.963-4.006l-3.582,2.109l-3.373-3.162l-3.371,0.844l-3.162-2.528l-5.9,1.896l-3.795-2.529l-9.273,3.584l-8.43,0.42l-9.066-4.639l-9.696-0.631l-11.592-0.633l-10.75,0.211l-9.063-4.848l-2.108-1.056l-6.534,0.211l-4.403-0.274l0.657,0.344l0.584-2.178c0,0,1.687-3.793,2.739-4.427c1.055-0.631,1.477-5.27,1.477-5.27l0.21-5.48l3.583,0.212l4.426,0.211l4.005-2.318l4.637-2.74l3.372,2.949l3.583,0.422l-0.843-4.848l-3.162-3.162l-3.372-4.637l-3.794-3.162l-3.161-3.582l-0.421-4.64l-1.686-4.637l-4.005-0.631l-1.477-3.584l-2.528-3.162l1.054-4.004l2.106-5.691l-6.533-1.896l-6.745-1.475L346.512,332.052" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/niederoesterreich" target="_parent"><path class="<?php echo $highestPartyIds['niederoesterreich']; ?>" id="niederoesterreich" d="M577.324,14.64l-0.424,3.59l-1.258,3.375l2.318,9.693l-0.637,3.165l-0.834,3.363l0.41,2.741l-0.197,2.529l-1.271,4.012l0.848,2.742l1.473,2.74l-1.26,2.741h-1.27l-2.316-1.271l-5.482-0.849h-6.105l-1.059,7.8l-6.529,6.965l-1.482,5.682l0.426,7.375l-1.473,5.058l0.199-0.198v2.317h3.588l3.59,0.622l4.209,1.695l3.803,1.258l4.635,0.424l3.998,2.53l-0.635,2.317l-2.105,0.211l-1.895,2.74l-0.637,1.893l0.637,2.105l4.848,3.801l2.105,0.849l0.211,5.27h2.529v1.47l0.211,4l-0.211,2.119l1.684,2.729l0.424,3.165l-0.213,4.847l0.213,4.226l0.635,6.739l-1.471-0.848l-1.906-0.834l-1.682-1.483l-2.318,0.211l-1.893,0.212l-2.105,1.483l-2.742,2.939l-2.119,2.74l-2.104,0.849l-2.529,0.636l-2.316,0.622l-2.529,0.635l-3.787,1.061l-4.225-1.271l-1.473-1.046l-2.316-2.53l-2.529-2.74l-0.635-1.695l-2.953-0.198l-3.787-0.424l-4.225,3.363l-0.41,3.8l0.41,4.423l-1.047,4.211l2.105,4.013l-0.848,1.471l-1.049,2.952l-1.904,4.014l0.848,3.15l4.211,3.377l2.33,1.894l2.316,1.907l2.316,0.411l2.105,1.271l1.682,1.682l3.164,2.53l3.377,1.06l2.531,1.046h2.314l3.365,1.482l3.801,3.165l0.635,3.364l-1.693,1.271v2.953l-1.471,3.152l-1.061,1.908v2.528l1.482,3.999l-0.715,3.669l0.928,1.603l2.318,1.893l2.527-2.104l5.893,0.211l2.332,0.424l1.682,0.834l3.375,2.953c0,0,1.465,0.212,2.73,0.424c1.264,0.21,2.738-1.046,2.738-1.046l2.119-4.86l2.531-0.622l3.787-0.425l2.529,1.472l2.105-0.623l3.588-1.907l3.998-1.682l4.438-1.061l1.682-4.847l1.258-0.833l2.119-2.317l2.742,0.623l3.363-0.834l1.893-1.907l2.119-0.41c0,0,1.887,0,3.363,0s4.225,3.999,4.225,3.999l2.529,3.166c0,0,3.791,0.424,4.635,0.424s4.211,1.258,4.211,1.258l2.953,3.589l4.422-0.636h4.635l1.906,4.21l2.531,0.424l3.363,0.424h3.801l1.895,5.271l2.951,7.164l2.529-4.634l4.424,0.211l1.482,5.48l-0.424,4.211l4.424-0.424l2.74,2.318l1.893,2.95l1.484,3.166h4.211H700l1.061,1.472l1.471,0.848l4.012-0.213l2.529-2.529l0.412,6.529l2.33,2.33l3.363,3.152l4.848-0.425l4.012-0.411l3.574-3.164l3.377-2.742l2.953-3.377l1.258-3.363l-3.363-3.377l-0.213-4.209l0.424-2.529l2.107-1.694l0.832-2.318v-2.529l1.908-2.316l-0.213-2.317l-1.482-1.893l-3.574-3.59l-2.318-1.894l-1.906-2.953l-0.621-1.893l-0.85-3.589v-4.848l2.529-2.317l2.742,0.424v-2.953l1.893-3.165l-0.637-3.999l-0.621-3.377l2.953-4.211l1.469-2.105l2.953-2.529l5.271-1.061l2.527-0.847l3.998,2.529l2.107,2.104l2.951-2.317l2.105-1.894v-3.575l2.742-1.271l3.164-1.683l0.848-2.529l0.211-4.647l3.152-1.682l4.012-1.683l4.424-2.528l2.529-3.588l3.377-2.953h3.574l4.225,2.953l2.318,1.694l1.256-1.694l0.213-3.364l-1.258-3.588l4.635-1.683l1.045,1.258l2.742-2.741l2.848-2.848l-0.078-0.146l-1.496-1.854h-1.895l-2.529-0.848l-2.74-2.939l-2.318-0.424l-1.27-4.436l-0.85-3.152l-1.258-3.376v-4.847l-3.164-0.849l-0.848-1.257l-2.318-2.953l-0.834-3.801l-5.482-2.939l-1.27-3.801l1.48-1.893l-0.211-10.752l2.529-5.482l2.531-4.634l2.951-5.058l-2.105-5.907v-3.151l-1.059-3.589l-3.59-11.388l-3.15-3.788l-4.438,2.53h-6.104l-2.953-3.377l-4.635-0.635l-0.635,1.907l-2.105,1.046l-0.848-2.74v-3.576l-3.166-2.952l-4.422,2.106l-7.801-4.211l-3.166,2.104l-4.211-1.06l-3.377,9.494l-4.633,3.364l-1.895-1.683h-1.895l-1.695,2.531l-1.469-1.472h-1.059l-6.953,0.622l-7.588-1.471l-2.105,1.683h-4.635l-14.553-8.223l-2.105-3.364l-11.799-6.118h-5.693l-0.424,1.483l-1.047,2.105l-7.588-0.637l-1.059-1.47l-2.531-1.695l-3.588-1.894l-5.258-0.635l-6.117-1.259l-3.998-5.481h-5.061l-8.223-4.012l-3.801,1.482l-3.363-2.316l-1.482,6.527l-4.848-0.211l-3.166,2.529l-3.15-0.411l2.105-3.802l-2.74-4.209h-7.377l-1.695-1.695L577.324,14.64z M730.018,108.951c0.029-0.003,0.064,0.002,0.094,0c0.393,0.232,0.809,0.423,1.178,0.688c0.951,0.292,0.83,1.17,0.85,1.975c0.646,0.938,0.219,2.16,0.344,3.23c1.516,1.063,3.021,2.134,4.502,3.244c0.197,0.286,0.393,0.342,0.557,0.278c0.367-0.158,0.613-0.958,0.529-1.377c0.023-0.709-0.467-1.643-0.197-2.197c1.324-0.154,2.619,0.29,3.734,0.979c1.072,0.391,0.256,1.234-0.027,1.882c-0.744,0.844,0.475,1.065,0.438,1.893c0.844,0.273,1.055,1.204,2.066,1.085c0.715-0.069,1.402-0.441,2.172-0.12c-0.141,1.344-0.713,2.59-0.98,3.907c0.961-0.052,0.984,0.754,1.789,0.715c-0.447,1.083-0.631,2.238-0.795,3.391c0.115,0.937-0.314,1.736-0.715,2.556c-0.463,0.685-0.643,1.42-0.344,2.211c0.379,0.815,0.297,1.629-0.055,2.437c0.43,0.56-0.389,1.258-0.172,2.04c0.166,0.936,1.648,0.316,1.178-0.463c0.223,0.018,0.369,0.056,0.451,0.119c0.002,0.002,0.01,0.012,0.012,0.014c0.002,0.003,0.014,0.012,0.016,0.014c0.002,0.004,0.01,0.009,0.012,0.013c0.002,0.003,0.012,0.012,0.014,0.014c0.002,0.005,0.012,0.01,0.014,0.014c0.002,0.002-0.002,0.011,0,0.013c0.176,0.354-0.594,1.074-0.291,1.616c0.016,0.029,0.043,0.063,0.064,0.092c0.064,0.075,0.158,0.148,0.277,0.212c0,0.002,0,0.011,0,0.013c0.01,0.162,0.156,0.513,0.346,0.729c0.082,0.092,0.184,0.164,0.277,0.186c0.025,0.006,0.064,0.003,0.092,0c0.123-0.021,0.26-0.125,0.371-0.384c0.041,0.146,0.1,0.258,0.158,0.331c0.02,0.023,0.047,0.05,0.066,0.067c0.02,0.013,0.047,0.029,0.066,0.04c0.006,0.003,0.02,0.011,0.025,0.013c0.014,0.004,0.039,0.011,0.053,0.013s0.039,0,0.053,0c0.02,0,0.049,0.002,0.066,0c0.268-0.028,0.609-0.264,1.008-0.463c0.955-0.16,0.992,1.104,0.477,1.589c0.604,0.482,0.809,1.546,0.396,2.105c0.184,0.629,0.182,1.004,0.053,1.205c-0.008,0.01-0.02,0.031-0.025,0.04c-0.006,0.006-0.021,0.021-0.025,0.025c-0.014,0.015-0.037,0.028-0.053,0.04c-0.012,0.008-0.029,0.021-0.041,0.026c-0.646,0.317-2.381-0.852-3.324-0.967c-1.707-0.283-2.326-2.212-3.813-2.899c-0.758-0.761-1.756-0.28-2.596,0.026c-0.781-0.254-1.182-0.315-1.801,0.292c-0.377-0.193-0.643-0.261-0.848-0.227c-0.049,0.01-0.105,0.033-0.146,0.054c-0.02,0.009-0.049,0.027-0.066,0.041c-0.221,0.146-0.385,0.45-0.607,0.833c-0.73,0.47-0.959,1.266-1.67,1.694c-0.795,1.263-2.145,1.039-3.535,1.034c-0.752,0.303,0.215,1.513-0.027,2.186c0.08,0.431,0.256,0.825,0.252,1.046c0,0.01-0.012,0.029-0.014,0.04c0,0.007,0.002,0.021,0,0.025c0,0.006-0.01,0.021-0.012,0.026c-0.002,0.002,0,0.01,0,0.013c-0.002,0.002-0.012,0.011-0.014,0.014c-0.01,0.013-0.025,0.03-0.041,0.039c-0.002,0.003-0.01,0.013-0.014,0.014c-0.021,0.01-0.061,0.01-0.092,0.013c-0.135,0.008-0.367-0.038-0.715-0.172c-0.85-0.817-1.084,0.603-2,0.159c-0.109,0.244-0.219,0.387-0.316,0.451c-0.01,0.006-0.029,0.021-0.041,0.024c-0.008,0.005-0.029,0.011-0.039,0.013c-0.014,0.004-0.041,0-0.053,0c-0.01,0-0.029,0.002-0.041,0c-0.01-0.002-0.029-0.01-0.039-0.013c-0.016-0.005-0.039-0.007-0.053-0.013c-0.012-0.006-0.031-0.021-0.041-0.026c-0.236-0.144-0.496-0.514-0.85-0.714c-1.084-0.08-1.877-1.021-2.992-0.834c-1.176-0.378-2.529-0.378-3.549-1.112c-1.055-0.484-2.27-0.609-3.35-1.086c-0.039,0.026-0.086,0.06-0.119,0.094c-0.408,0.411-0.564,1.354-0.848,1.933c-0.025,0.163-0.072,0.285-0.119,0.358c-0.023,0.029-0.057,0.061-0.08,0.078c-0.002,0.003-0.012,0.012-0.014,0.014c-0.006,0.004-0.021,0.01-0.025,0.013c-0.006,0.002-0.021,0.011-0.027,0.013c-0.004,0.002-0.02-0.002-0.023,0c-0.008,0.001-0.021,0.013-0.027,0.014c-0.1,0.015-0.221-0.008-0.316,0.013c-0.006,0.001-0.021-0.002-0.025,0c-0.006,0.002-0.021,0.01-0.027,0.013c-0.004,0.003-0.02,0.011-0.023,0.014c-0.004,0.002-0.012,0.011-0.016,0.013c-0.02,0.016-0.047,0.041-0.064,0.066c-0.066,0.097-0.115,0.27-0.133,0.569c-0.016,0.191-0.074,0.307-0.146,0.357c-0.027,0.019-0.07,0.024-0.105,0.026c-0.375-0.007-1.07-0.834-1.377-1.086c0.09-0.479-0.023-0.729-0.238-0.86c-0.287-0.166-0.756-0.159-1.191-0.266c-0.02,0.014-0.047,0.029-0.064,0.04c-0.008,0.003-0.021,0.011-0.027,0.014c-0.795,0.346-1.924-1.537-3.098-0.425c-1.186,1.059-3.1-0.361-4.346,0.888c-0.652,0.352-1.441,0.921-2.092,0.437c0.383-0.804,1.354-0.634,2.039-0.966c0.434-0.095,0.766-0.273,0.928-0.516c0.012-0.021,0.029-0.047,0.039-0.067c0.027-0.059,0.059-0.133,0.066-0.198c0.021-0.17-0.023-0.367-0.146-0.583c-0.719,0.121-1.443,0.178-2.156,0.332c0.008-0.81-0.934-1.252-1.061-2.08c-0.158-0.16-0.24-0.298-0.266-0.396c-0.002-0.01-0.012-0.029-0.014-0.04c0-0.002,0-0.011,0-0.013s0-0.011,0-0.014s0-0.011,0-0.013s0-0.011,0-0.014c0-0.002,0.014-0.012,0.014-0.014c0.002-0.002,0-0.011,0-0.013c0.002-0.002,0-0.011,0-0.013c0.002-0.007,0.01-0.021,0.014-0.027c0-0.001,0.01-0.011,0.012-0.013c0.23-0.306,1.439-0.179,1.736-0.623c0.006-0.01,0.02-0.028,0.025-0.04c0.002-0.005,0.012-0.021,0.014-0.026s0.012-0.021,0.014-0.025c0.002-0.01-0.004-0.03,0-0.041c0-0.01,0.01-0.029,0.012-0.04c0.002-0.008-0.002-0.02,0-0.026c-0.9-0.076-1.793-0.185-2.688-0.331c-0.162,0.084-0.305,0.124-0.41,0.133c-0.033,0.002-0.076,0.004-0.105,0c-0.008-0.001-0.021,0.001-0.025,0c-0.006-0.002-0.021-0.011-0.025-0.013c-0.008-0.002-0.021-0.01-0.027-0.014c-0.002-0.001-0.01,0.001-0.014,0c-0.002-0.001-0.01-0.012-0.012-0.014c-0.006-0.003-0.021-0.01-0.025-0.013c-0.002-0.002-0.012-0.011-0.014-0.013c-0.004-0.002-0.012-0.012-0.014-0.014c-0.004-0.004-0.01-0.009-0.014-0.013c-0.32-0.361-0.086-1.568-0.543-2.159c-0.09-0.11-0.207-0.208-0.357-0.265c-0.68-0.054-0.977-0.177-1.059-0.345c-0.148-0.345,0.537-0.894,0.568-1.51c0.363-0.489,1.076-0.949,1.363-1.51c0.586-0.347,0.484-1.313,0.623-1.959c0.281-0.749,0.688-1.361-0.053-1.959c0.293-0.299,0.631-0.58,0.754-0.821c0.008-0.019,0.02-0.048,0.025-0.065c0.006-0.019,0.012-0.048,0.014-0.066c0.002-0.014,0-0.039,0-0.053c-0.002-0.027-0.016-0.066-0.025-0.092c-0.012-0.024-0.033-0.058-0.055-0.079c-0.006-0.007-0.02-0.021-0.025-0.026c-0.092-0.083-0.246-0.166-0.477-0.238c-0.025,0.016-0.057,0.029-0.08,0.04c-0.012,0.005-0.039,0.01-0.053,0.014c-0.01,0.003-0.029,0.011-0.041,0.013c-0.01,0.002-0.029,0.011-0.039,0.013c-0.014,0.002-0.039,0-0.055,0c-0.629,0.002-1.193-1.252-0.779-1.682c0.002-0.002,0.01-0.01,0.012-0.013c0.004-0.002,0.012-0.012,0.014-0.014c0.006-0.004,0.021-0.009,0.025-0.013c0.004-0.002,0.012-0.012,0.014-0.014c0.006-0.003,0.021-0.01,0.027-0.013c0.004-0.004,0.02-0.01,0.023-0.014c0.025-0.012,0.064-0.032,0.094-0.04c0.033-0.009,0.08-0.009,0.119-0.013c0.035-0.002,0.08-0.003,0.119,0c-0.002-0.025-0.008-0.059-0.014-0.08c-0.002-0.006-0.01-0.021-0.014-0.026c-0.002-0.006-0.01-0.021-0.012-0.025c-0.002-0.008-0.012-0.022-0.014-0.027c-0.264-0.436-1.471-0.178-1.734-0.238c-0.01-0.002-0.021-0.01-0.025-0.013c-0.002-0.001-0.012,0-0.014,0c0-0.001,0.002-0.013,0-0.014c0-0.001,0-0.013,0-0.013c0-0.001,0-0.012,0-0.014c0.002-0.002-0.002-0.01,0-0.013c0.041-0.06,0.189-0.168,0.477-0.331c0.363-0.516,0.973-0.567,1.18-0.795c0.002-0.002,0.012-0.012,0.014-0.014c0.008-0.009,0.02-0.028,0.025-0.04c0.002-0.005,0.012-0.021,0.014-0.025c0-0.003-0.002-0.011,0-0.014c0.002-0.006,0.012-0.021,0.012-0.025c0.002-0.009,0-0.03,0-0.04c0.002-0.009,0-0.029,0-0.04c0-0.019,0.006-0.047,0-0.066c-1.006-0.681-0.764-1.994-0.516-2.979c0.152-0.775,0.695-1.354,0.967-2.119c0.211-0.259,0.293-0.866,0.477-1.166c0.033-0.051,0.078-0.104,0.119-0.132c0.025-0.018,0.064-0.035,0.094-0.041c0.023-0.003,0.063,0.008,0.092,0.013c0.092,0.025,0.211,0.095,0.346,0.239c1.143,0.539,1.957,1.464,2.793,2.383c0.371,0.009,0.652,0.157,0.809,0.371c0.205,0.294,0.193,0.725-0.078,1.166c0.373,0.921,1.27,0.749,1.932,0.477c0.27,0.072,0.4-0.004,0.479-0.132c0.115-0.207,0.104-0.575,0.211-0.795c0.01-0.02,0.025-0.049,0.041-0.066c0.014-0.017,0.035-0.04,0.053-0.053c0.082-0.06,0.203-0.081,0.385-0.04c0.563-0.471,0.807-0.957,1.061-1.549c-0.262-0.024-0.404-0.055-0.465-0.093c-0.002-0.001-0.012-0.011-0.014-0.013c-0.002-0.005-0.01-0.011-0.012-0.014c-0.002-0.002,0-0.011,0-0.013s0-0.011,0-0.013s-0.002-0.012,0-0.014c0.004-0.007,0.018-0.019,0.025-0.025c0.002-0.002,0.01-0.012,0.014-0.014c0.016-0.011,0.043-0.028,0.064-0.04c0.297-0.143,1.082-0.299,1.352-0.317c1.219,0.146,1.041-0.731,1.945-1.166c0.219-0.178,0.299-0.312,0.293-0.411c-0.006-0.042-0.035-0.087-0.066-0.12c-0.191-0.178-0.744-0.239-0.9-0.396c-0.004-0.005-0.01-0.021-0.012-0.025c-0.002-0.003-0.012-0.011-0.014-0.014c-0.002-0.007-0.012-0.021-0.014-0.026c-0.002-0.009-0.002-0.03,0-0.04c0.008-0.043,0.045-0.1,0.105-0.159c0.332-0.604,1.104-0.938,1.801-0.861c0.807,0.71,2.027-0.41,2.424-0.966c0.559,0.21,1.025,0.204,1.338-0.08c0.023-0.021,0.059-0.054,0.078-0.079c0.08-0.094,0.146-0.217,0.199-0.357c0.475-0.443,2.113-0.55,1.471-1.352c-0.1-0.115-0.143-0.211-0.146-0.277c0-0.001,0-0.011,0-0.013s0.014-0.012,0.014-0.013c0-0.002-0.002-0.012,0-0.013c0-0.002-0.002-0.012,0-0.013c0.002-0.004,0.012-0.011,0.012-0.014c0.002-0.001,0-0.011,0-0.013c0.012-0.014,0.035-0.03,0.055-0.041c0.313-0.143,1.447,0.31,1.391,0.979c-0.002,0.023-0.008,0.057-0.014,0.079c-0.006,0.021-0.02,0.046-0.025,0.066c0.768-0.17,1.477,0.825,2.133,0.411c-0.18-0.357-0.178-0.815,0.078-1.073c0.17-0.164,0.459-0.259,0.861-0.185c0.195-0.02,0.299-0.08,0.344-0.172c0.162-0.385-0.662-1.264-0.344-1.708c-0.057-0.236-0.016-0.391,0.064-0.49c0.203-0.229,0.684-0.174,0.9-0.266c0.059-0.025,0.098-0.073,0.105-0.133c0.006-0.073-0.035-0.184-0.133-0.331c-0.26-0.527-0.012-1.254-0.463-1.841c-0.104-0.305-0.045-0.513,0.092-0.662c0.309-0.318,0.984-0.409,1.152-0.782c0.029-0.036,0.063-0.059,0.092-0.078c0.016-0.01,0.039-0.021,0.053-0.026c0.016-0.005,0.039-0.012,0.055-0.013c0.01,0,0.029-0.001,0.039,0c0.014,0.002,0.041,0.008,0.055,0.013c0.037,0.016,0.082,0.047,0.119,0.08c0.297,0.27,0.623,0.983,1.23,0.808C728.106,109.258,729.133,109.036,730.018,108.951z" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/oberoesterreich" target="_parent"> <path class="<?php echo $highestPartyIds['oberoesterreich']; ?>" id="oberoesterreich" d="M364.674,191.534v-2.951l-1.016-2.522l0.172-0.429l-2.74-2.53l-5.27-3.161l-2.107-4.638l-1.477-5.479l2.109-1.054l2.95,0.422l-0.21-2.53l1.476-2.108l3.372-1.687l0.421-2.74v-2.74l2.53-1.475h3.794l3.372-0.632l2.74-0.632l1.054-1.896l2.107-3.583l0.844-2.108l2.74-0.422h3.161l1.687-1.054l1.265-1.265l2.319-0.21l2.107-1.897l3.584-1.687l8.221-0.21l2.528-0.844l4.638-3.372l3.16-3.583l2.951-3.161l2.109-2.529l0.631-2.53l0.844-2.107l0.633-2.108v-3.162l-0.211-2.95v-2.529l0.633-2.529l2.107-3.162l-1.477-3.794l-1.053-2.95v-2.318l2.107-1.687l2.951-1.265l3.16-0.844l2.74,1.897l1.688,1.687l2.529-0.843l1.475-0.21l1.896,1.475l3.373,0.211l0.842,1.687l1.266,1.476l3.162,1.896l1.896,0.843l1.475-1.896l0.422-5.27l2.74-0.422l3.373-3.162v-3.371l2.527-2.951l-2.316-10.33l1.686-2.528l-4.426-3.583l1.896-2.319l0.844-2.108l0.844-3.371l2.74,0.422l2.951,0.21l8.219,6.746l4.215,0.422l2.951,4.426l2.951,1.896v2.529l-3.162,1.477v1.896l2.107,1.897l0.211,1.687l3.795,2.108l12.855,0.21l3.373,1.896l3.16,0.211l2.74,0.42l2.74,0.844l3.162,2.107l3.16-3.373l2.318-2.74l2.529,0.211l1.896-4.217v-4.635l4.217-1.054l2.529,2.95l2.74,1.265l2.738,1.265l2.107-2.107l2.109-1.688l1.895,1.055l0.633,2.529h3.371l1.057,3.373l3.16,0.209l0.211-0.209v2.317h3.584l3.582,0.633l4.217,1.687l3.793,1.265l4.639,0.421l4.004,2.53l-0.633,2.319l-2.107,0.209l-1.896,2.74l-0.633,1.897l0.633,2.108l4.848,3.793l2.107,0.844l0.211,5.27h2.529v1.477l0.211,4.005l-0.211,2.106l1.688,2.74l0.422,3.162l-0.211,4.848l0.211,4.216l0.631,6.745l-1.475-0.843l-1.896-0.843l-1.686-1.476l-2.32,0.21l-1.895,0.211L571.442,142l-2.74,2.95l-2.107,2.74l-2.107,0.843l-2.529,0.632l-2.316,0.632l-2.531,0.632l-3.793,1.055l-4.215-1.266l-1.475-1.054l-2.318-2.53l-2.531-2.74l-0.631-1.687l-2.951-0.211l-3.793-0.421l-4.217,3.373l-0.42,3.794l0.42,4.426l-1.053,4.215l2.107,4.005l-0.844,1.476l-1.053,2.95l-1.898,4.006l0.846,3.161l4.215,3.372l2.318,1.896l2.318,1.896l2.318,0.422l2.107,1.265l1.688,1.687l3.16,2.529l3.373,1.054l2.529,1.055h2.318l3.373,1.475l3.793,3.162l0.631,3.372l-1.686,1.265v2.95l-1.477,3.162l-1.055,1.896v2.53l1.477,4.005l-0.633,3.793l-2.318,2.108l-3.371,4.004l-3.793,1.688l-5.691,2.106l-2.74,1.055l-5.27,2.107l0.211,2.109l-1.477,2.106l-3.371,0.211h-2.318l-1.477,1.264l-2.738,4.218l-0.844,2.106c0,0-2.107,0.631-2.951,0.631c-0.842,0-2.738,0-2.738,0l-6.535-0.842l-2.318-1.477l-2.529-2.949h-1.688l-2.951,0.631l-1.475,2.318l-2.74,0.211l-3.371,0.422l-1.266,2.951l-1.688-0.211l0.211-2.74l-0.422-2.107l-3.582-3.162l-3.584-3.161h-0.424l-4.004,1.055l-1.475-1.478l-1.055,0.212l-3.793-0.423l-1.688-0.422l-3.793-2.739l-3.373,2.53l-4.848,2.74l-6.955,4.215l-0.422,1.053l-0.211,3.796v3.37v2.951l0.422,2.74l1.264,2.318l2.32,1.896l2.107,2.529l0.842,2.317v3.373l-0.631,0.634l-2.74,1.895l-0.633,1.898l-0.633,2.317l-2.738-0.633l-4.848-0.631l-4.217-1.055h0.211l-3.795-2.529l-3.371-2.74l-4.428-2.74l-0.209-3.584l1.266-3.793l1.896-3.373l-0.422-3.37l-1.477-1.476l2.107-6.535l1.896-5.899l-0.42-2.74l-1.477-0.633l-3.584-0.422l-4.215-2.529l-2.529-2.108v-0.843h9.063l1.266-1.265l-0.211-1.897l-5.479-2.529l-7.59-0.632l-3.586,0.213h-5.27l-2.108-4.006l-2.528-8.009l-1.688-6.534l1.477-5.059l5.27,0.21l2.741,0.21v-2.74l-1.687-2.529l-4.215-0.844l-4.216,0.633l-2.74,2.528l-6.956,0.21l-7.167-1.054l-4.637-4.216l-2.108-2.107l-4.005,0.21l-3.372,1.054l-2.318,0.212l-0.844,2.106l-1.265,3.584l-6.125,1.642" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/salzburg" target="_parent"><path class="<?php echo $highestPartyIds['salzburg']; ?>" id="salzburg" d="M346.226,332.149l2.107-1.688l0.633-3.162l5.269,2.531l2.951,1.896l3.372,2.107l5.058,0.631l6.113,0.846h4.216l4.637,2.527l4.638,2.531l4.637,2.74l5.059-1.056h3.794l4.426,0.422l5.059-1.896l3.161-0.633l0.844-2.949l2.108-4.217l4.637-1.265l3.371,1.265l3.795,2.108l4.637,0.423l4.637,0.209h3.373l4.426,1.477l2.109,0.842l5.057-0.209h3.795l2.318,1.475l2.529,2.529l2.74,2.318l3.371,1.477l4.637,3.371l2.531-1.053l2.318-2.529l-0.211-3.371l1.686-3.162l1.688-3.373l2.107-2.95l-0.844-5.271l1.055-2.951l4.639-3.159l1.264-1.896l-0.211-2.74l-4.004-1.055l-1.688-1.053l-2.738-5.691l-2.109-4.215l-2.318-3.793l-2.74-5.691l-2.949,0.211l-0.633,2.318l-0.844,1.475l-4.637-1.266l-1.896,1.688l-1.266,1.266l-4.848-2.951l-3.373-2.318l-1.688-0.844l-2.527-8.432l-2.32-5.9l-1.264-4.637l1.475-6.324l0.422-1.266l-3.793-2.529l-3.373-2.74l-4.426-2.739l-0.211-3.582l1.266-3.795l1.896-3.371l-0.422-3.373l-1.477-1.476l2.107-6.534l1.896-5.9l-0.422-2.74l-1.475-0.633l-3.582-0.424l-4.217-2.53l-2.529-2.106v-0.844h9.064l1.264-1.265l-0.209-1.897l-5.48-2.529l-7.588-0.632l-3.584,0.21h-5.27l-2.108-4.006l-2.528-8.009l-1.688-6.534l1.477-5.059l5.27,0.211l2.741,0.21v-2.74l-1.688-2.529l-4.215-0.844l-4.215,0.633l-2.74,2.528l-6.956,0.21l-7.167-1.054l-4.636-4.215l-2.108-2.107l-4.005,0.21l-3.372,1.055l-2.318,0.21l-0.844,2.107l-1.265,3.583l-6.125,1.643l-0.198-0.377l1.476,1.896l1.476,1.688l3.372,1.265l4.849,7.167l5.27,8.431l-3.794,8.01l-3.161,3.583l0.21,4.637l-2.107,4.428l1.476,2.107h7.167l3.161-2.74l4.637,4.637l1.688,4.217l2.529,4.638l-2.74,2.949l-0.21,5.479h-2.107l-0.843,2.107l1.896,2.108l-1.896,2.74l-0.211,2.318c0,0,1.265,2.528,2.318,2.528c1.055,0-0.421,3.584-0.421,3.584l-2.741,1.054l-1.475,3.372l-2.318-2.95l-2.951,1.896l-8.01-4.848l-0.211-1.896l-5.059-4.426h-3.373l-2.74-5.691l1.477-4.639l2.74-0.42l-1.477-2.951l-5.269-2.528l0.21-3.373l-3.583-1.896l-2.108,0.633l-4.427-0.211l-3.372,1.688l-3.583-0.211c0,0-2.003,4.795-3.583,6.11l-0.21-0.422l1.265,4.851l3.373,2.106l3.793,1.687l0.422,4.637v3.164l2.108,2.529l1.686,2.317l-2.949,4.849l-1.897,2.528l-0.843,3.582l-1.054,3.584l-2.319,3.162l-2.74,1.264h-4.215l-5.691,5.48l0.21,3.162l-9.695,3.795l-5.27-3.584l-2.318,0.844l-3.794,3.371l-6.112,2.74l-4.637,2.528l-5.902-0.422l-2.74,1.478l1.265,5.059l-1.476,2.74l0.21,6.111l0.422,4.848l3.162,1.266l1.687,1.896l0.211,5.059v4.638l0.044-0.31l2.906-0.639l5.27-1.16l2.525,1.891l0.215,0.218l5.901-1.478l4.849-3.371l1.476-2.528l1.265-3.584l4.849-1.265l3.794,0.842l3.793-3.37l3.162,1.896l2.74,0.633h4.005l5.059,3.582L346.226,332.149" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/steiermark" target="_parent"><path class="<?php echo $highestPartyIds['steiermark']; ?>" id="steiermark" d="M559.842,215.527l0.994,1.722l2.318,1.896l2.529-2.107l5.9,0.211l2.318,0.421l1.688,0.844l3.371,2.951c0,0,1.477,0.21,2.738,0.421c1.268,0.21,2.742-1.053,2.742-1.053l2.107-4.849l2.529-0.633l3.793-0.421l2.529,1.476l2.109-0.633l3.582-1.896l4.006-1.688l4.426-1.054l1.688-4.848l1.266-0.844l2.107-2.318l2.74,0.632l3.371-0.843l1.896-1.897l2.107-0.421c0,0,1.896,0,3.373,0s4.215,4.005,4.215,4.005l2.529,3.161c0,0,3.795,0.421,4.637,0.421c0.844,0,4.217,1.267,4.217,1.267l2.949,3.583l4.428-0.632h4.637l1.896,4.215l2.529,0.421l3.373,0.422h3.793l1.896,5.27l2.949,7.168l2.529-4.638l4.428,0.21l1.477,5.481l-0.424,4.215l4.428-0.422l2.74,2.317l1.896,2.949l1.475,3.162h4.215h4.85l1.055,1.478l1.475,0.842l4.006-0.209l2.529-2.531l0.42,6.535l2.32,2.317l3.582,3.371l-2.949,4.851l-3.162,4.426l-2.318-4.637h-2.107v1.688l-0.211,2.74l-1.686,1.053l1.475,4.637l1.896,4.638l1.266,3.584l2.107,4.637l0.844,4.85l0.211,4.005l1.688,2.95l1.896,2.529l0.211,2.318v3.584l-1.268,4.848l0.635,3.793l3.371,3.584l3.584,2.318l-0.213,4.215l-2.107,3.162l-2.318,4.215l-2.316,3.795l-1.688,3.371l-1.477,0.211l-3.16,2.529l0.422,5.479l1.475,2.107l2.318,2.108v2.529l-1.055,1.053l-3.371,0.845l1.688,2.739v6.111l0.631,5.48l1.896,2.95l2.529,0.422l0.424,2.529l1.895,1.688v5.479h-1.895l-4.43-5.69l-2.105,0.844l-11.594-4.639l-6.322,1.688l-4.428,3.162l-3.584,0.842h-2.105l-2.529-1.475h-2.951l-1.266,3.793l-0.631,1.477l-3.373-1.266l-5.902,2.529v2.739v3.162l-3.371,2.74l-4.848,0.633l-2.74-2.529l-2.107-2.108h-4.006l-10.537,1.477l-8.855,0.842l-4.426-1.686l-8.221,1.475l0.77-0.658l-2.877-1.659l-3.584-2.951l-2.738-1.053l-0.424-1.687l-0.631-4.85v-5.06l-1.266-3.793L601.723,365l-1.264-2.318l-0.633-3.373l0.844-2.737l1.896-3.373l-0.211-3.793l-1.686-2.529l-3.162-4.006l-2.318-3.162l-2.318-3.793l-2.107-2.529l-3.373-1.688l-2.529-2.527l-2.529,0.842l-3.793,1.478l-2.109,0.631h-2.738l-2.318,0.211l-2.949,0.422l-3.162,0.209h-2.318l-2.529,0.844h-1.896l-2.529-0.631h-1.896l-1.896,1.053l-5.27,0.211l-1.898,0.634h-1.686l-2.107,1.475l-2.107,1.896l-2.74,1.476h-2.74l-1.477-0.844l-1.686-4.005l-1.266,0.423l-4.215,0.422l-2.951,0.209l-2.74-0.631l-1.475-2.529l-1.266-2.107l-1.896,0.42l-1.896,0.634h-1.477l-2.738,0.422l-2.529,1.266l-3.371,1.687l-3.373,2.108l-3.162,1.264l-2.529,2.318l-1.475,2.951l-1.475,2.738l-2.951,1.477l-3.371,2.951l-1.266,2.949l-4.639,2.108l-2.318-1.055l-2.949-2.107l-2.74-4.428l-0.633,0.211l2.529-1.053l2.318-2.529l-0.211-3.373l1.688-3.162l1.688-3.373l2.107-2.948l-0.844-5.271l1.055-2.951l4.637-3.159l1.266-1.898l-0.211-2.74l-4.006-1.053l-1.686-1.055l-2.74-5.689l-2.107-4.217l-2.318-3.793l-2.74-5.689l-2.951,0.209l-0.631,2.318l-0.844,1.477l-4.637-1.266l-1.896,1.688l-1.266,1.264l-4.85-2.949l-3.371-2.318l-1.688-0.844l-2.529-8.432l-2.316-5.9l-1.266-4.639l1.475-6.322l0.422-1.266h-0.211l4.217,1.055l4.848,0.631l2.74,0.633l0.631-2.319l0.633-1.896l2.74-1.896l0.633-0.631v-3.373l-0.844-2.318l-2.109-2.529l-2.316-1.896l-1.266-2.32l-0.422-2.74v-2.948v-3.373l0.211-3.793l0.422-1.054l6.955-4.217l4.848-2.74l3.373-2.528l3.795,2.74l1.686,0.422l3.795,0.422l1.053-0.211l1.477,1.475l4.006-1.053h0.42l3.584,3.162l3.584,3.16l0.422,2.108l-0.211,2.74l1.688,0.209l1.266-2.949l3.371-0.422l2.74-0.211l1.475-2.318l2.951-0.633h1.688l2.529,2.951l2.318,1.477l6.533,0.843c0,0,1.896,0,2.74,0c0.842,0,2.949-0.632,2.949-0.632l0.844-2.108l2.74-4.215l1.475-1.267h2.318l3.373-0.209l1.475-2.106l-0.211-2.109l5.271-2.107l2.738-1.055l5.691-2.106l3.793-1.688l3.373-4.005l2.316-2.108" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/tirol" target="_parent"><path class="<?php echo $highestPartyIds['tirol']; ?>" id="tirol" d="M303.186,233.894l-3.8,2.953l-4.423,2.529l2.74,6.74l0.424,7.375l-4.647,1.061l-12.01-1.471l-1.47,1.047l-2.742-1.047l-15.811,4.211l-0.848,3.377l-6.951-1.271l-11.176,1.06l-3.788-1.482l-4.847,4.224v5.682l-2.952,3.377l-6.952,0.849l-6.33-1.482l-5.482,6.752l2.53,0.623l-0.623,3.166l-6.118-0.213l-4.847,4.438l-0.635,2.529l-3.166,2.529l-3.574-0.636l2.316-3.801l-2.105-1.682l-2.953,0.635l-4.423,1.258l-5.059,5.482l-6.118-0.635l-4.634,1.27l-4.849-2.74l2.106-2.953l-7.376-9.479l-4.437,0.424l-1.258-2.317l4.636-3.164l-3.788-3.377l-7.375,2.952h-4.226l-0.833-2.741l-4.224,0.211l-2.953-3.588l-5.893,0.211l-3.378-1.894l-3.376,3.166l-0.211,2.529H119.6l-4.436-2.953l0.847-2.74l-0.211-1.895l-5.694,1.682l2.741,3.377l-2.105,3.166l1.483,2.729l-1.271,2.526l3.8,2.119l1.046,8.211l-4.635,5.693l-0.424,3.166l-2.104-0.213l-2.953,3.166l1.061,1.471l-6.118,7.799h-2.953l-2.953,2.953l-4.635,1.894l-3.164-0.636l-3.337,1.047l-0.026,0.226l1.47,5.059l1.695,4.635l0.622,4.226l-0.837,4.42l-2.318,4.637l-2.952,4.422l-1.059,3.164l0.635,3.591l-2.104,3.997l-0.423,1.894l1.046,4.012l0.212,3.576l-1.683,4.012l-3.8,2.953l0.424,5.06l3.589,2.104l-0.198,6.025l4.833,0.08l3.8-2.939l4.423-1.271l0.212-4.211l1.258-4.437l5.693,1.06l1.682-0.636l-0.623-2.528l2.53-2.105l2.317-6.323l1.682,0.199l1.894-0.623l4.848,3.15l0.636,2.741l5.481,4.437l-2.529,6.529l0.636,2.317l4.21,2.951l7.164,0.426l6.329-3.166l5.906,0.211l3.151,3.166l4.847,1.256l0.636,2.531l-2.952,3.801l2.741,0.636l3.165-1.484l2.104,2.531l4.634,0.424l3.165,2.105l8.011-1.894l6.529,1.469l1.271-4.635l3.999-3.574v-6.116l2.741-2.742l-0.636-5.482l8.436-9.904l7.799-0.637l8.224-2.74l4.848,0.849l2.74,1.893l4.21-1.047l4.636-6.117h2.529l3.59,3.164l8.011-3.375l10.752,3.164l2.317,2.318h4l0.423-2.742l6.33-0.635l12.435-7.164l12.222-3.166l3.377-3.787l2.317-0.517v-4.329l-0.212-5.06l-1.695-1.893l-3.151-1.271l-0.425-4.848l-0.211-6.117l1.471-2.74l-1.259-5.059l2.741-1.471l5.893,0.424l4.647-2.529l6.105-2.74l3.8-3.377l2.317-0.834l5.27,3.574l9.693-3.787l-0.212-3.166l5.693-5.482h4.211l2.741-1.258l2.317-3.164l1.059-3.588l0.834-3.576l1.907-2.528l2.939-4.859l-1.683-2.317l-2.105-2.529v-3.152l-0.424-4.646l-3.786-1.683l-3.377-2.104l-1.165-4.465l-2.636-0.808l-3.151,2.316l-6.542-5.482l-2.105-4.633l-7.164,1.893l-4.224-1.258l-7.375,2.529l-1.683-4.012l2.317-3.152L303.186,233.894z M336.795,247.983l0.105,0.041l-0.212-0.427L336.795,247.983zM292.857,338.558l5.561-1.188l2.677-0.551l2.567,2.043l-2.596-2.105l-3.933,0.861L292.857,338.558z M303.662,338.862l0.782,0.637l-3.787,7.375l-6.753,1.682v7.802l3.165,4.633l0.424,3.166l6.316,4l4.436-0.412l1.471,1.471l3.588,6.541l-1.695,8.211l4.224,1.695c0,0,3.368-0.424,4.211-0.211c0.002,0,0.009-0.002,0.014,0c0.013,0.004,0.039,0.016,0.053,0.022c0.874,0.632,2.675,8.609,2.675,8.609l4.635,2.74l14.751,6.754l5.06,0.621l5.481-0.105l0.888,0.81l0.596-2.172c0,0,1.672-3.771,2.729-4.425c1.054-0.631,1.481-5.27,1.481-5.27l0.212-5.482l3.576,0.211l4.436,0.214l3.999-2.318l4.635-2.74l3.377,2.953l3.589,0.41l-0.849-4.848l-3.164-3.152l-3.378-4.646l-3.786-3.151l-3.165-3.588l-0.425-4.636l-1.682-4.635l-3.999-0.635l-1.483-3.59l-2.528-3.15l1.059-4.014l2.105-5.693l-6.541-1.893l-6.74-1.472l-1.258-5.059l-1.695-1.906l-5.059-3.576h-3.999l-2.741-0.635l-3.165-1.895l-3.788,3.364l-3.8-0.834l-4.848,1.259l-1.258,3.588l-1.482,2.528l-4.848,3.378l-5.905,1.471L303.662,338.862L303.662,338.862z M77.873,381.144h-0.211l0.199,0.505L77.873,381.144z" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/vorarlberg" target="_parent"><path class="<?php echo $highestPartyIds['vorarlberg']; ?>" id="vorarlberg" d="M77.873,381.735l0.211-6.533l-3.582-2.109l-0.423-5.059l3.793-2.949l1.688-4.006l-0.211-3.584l-1.054-4.004l0.422-1.896l2.106-4.006l-0.632-3.584l1.054-3.16l2.951-4.428l2.319-4.637l0.843-4.428l-0.632-4.216l-1.687-4.426l-1.491-4.979l-0.045-0.123v-2.318l1.476-1.896l2.74-0.633l0.843-2.106l-0.843-3.584l2.53-4.638l-1.055-3.373l-4.637-1.264l-2.74,3.582l-4.005-0.631l-2.318,2.529l-0.421-6.111l-2.318-1.898l3.583-2.317l-0.633-4.004l-1.686-2.318l-3.161-1.055v-3.162h-1.686l-2.951,2.108l-1.054-1.475v-3.584l-3.372-2.318l-1.266-3.161l-4.848,2.317l-2.319-2.951l-2.528,2.109l-4.216-2.529l0.21-4.006l-1.896-2.317l-4.637,0.211l-1.896,4.426l-2.53,4.637l-11.382,0.631l-4.637-0.42l-1.476,4.849l1.055,2.108l3.162,3.793l5.9,1.896l-1.264,5.059l3.161,3.793v3.584l-3.583,1.267l-2.951,0.422l-2.74,6.322l-3.162,3.795l-2.949,5.059l3.793,3.582l-1.476,2.318l2.95,3.373l-0.421,5.901l1.897,1.896l2.95,3.582l0.631,2.741l0.212,4.005l-2.109,5.69l3.794,0.631l3.583-0.842l8.431,4.215h3.372l4.005,2.318l4.638,0.209l2.739,4.217l-1.687,3.16v1.898l0.21,4.215l2.529,0.422l2.529,4.006l4.638-0.424l2.107,1.688h2.319l4.637,4.006l0.211,1.896l3.372,0.213l2.977,2.143" /></a>
        <a xlink:href="http://neuwal.com/wahlumfragen/wien" target="_parent"><path class="<?php echo $highestPartyIds['wien']; ?>" id="wien" d="M730.114,109.016c-0.902,0.08-1.988,0.285-2.5,1.103c-0.885,0.257-1.154-1.357-1.639-0.775c-0.248,0.548-1.586,0.462-1.25,1.438c0.451,0.586,0.213,1.317,0.475,1.845c0.625,0.94-1.213,0.056-0.943,1.218c-0.4,0.56,1.004,1.787-0.006,1.883c-1.031-0.188-1.24,0.652-0.941,1.247c-0.656,0.414-1.355-0.578-2.123-0.406c0.34-1.003-2.029-1.6-1.283-0.728c0.646,0.8-1,0.909-1.475,1.353c-0.258,0.69-0.852,0.809-1.617,0.518c-0.396,0.556-1.615,1.67-2.424,0.959c-0.697-0.078-1.473,0.262-1.805,0.867c-0.588,0.584,1.678,0.322,0.607,1.192c-0.904,0.436-0.725,1.318-1.941,1.17c-0.453,0.031-2.348,0.427-0.967,0.552c-0.252,0.594-0.492,1.071-1.057,1.542c-0.965-0.222-0.191,1.35-1.174,1.086c-0.662,0.271-1.547,0.456-1.922-0.466c0.482-0.772,0.15-1.517-0.729-1.538c-0.838-0.919-1.66-1.844-2.803-2.382c-0.775-0.837-0.76,0.635-1.127,1.083c-0.271,0.765-0.805,1.346-0.959,2.122c-0.248,0.985-0.498,2.302,0.51,2.982c0.107,0.495-0.771,0.39-1.24,1.056c-1.602,0.906,1.273-0.14,1.348,0.788c-1.25-0.075-0.268,2.271,0.594,1.738c1.139,0.354,0.375,0.843-0.213,1.44c0.744,0.598,0.342,1.215,0.061,1.964c-0.139,0.646-0.033,1.617-0.619,1.963c-0.287,0.561-1.004,1.012-1.369,1.502c-0.047,0.929-1.582,1.694,0.49,1.858c1.236,0.468,0.1,3.151,1.584,2.384c0.895,0.146,1.793,0.253,2.693,0.328c-0.045,0.913-2.68,0.236-1.561,1.385c0.129,0.828,1.061,1.281,1.053,2.09c0.713-0.154,1.441-0.218,2.162-0.339c0.4,0.704-0.045,1.183-0.887,1.368c-0.688,0.333-1.656,0.159-2.039,0.963c0.65,0.484,1.438-0.086,2.094-0.438c1.244-1.25,3.16,0.172,4.344-0.887c1.221-1.158,2.387,0.938,3.188,0.378c0.775,0.19,1.645-0.004,1.438,1.116c0.418,0.342,1.539,1.773,1.619,0.711c0.076-1.324,0.764-0.13,0.928-1.176c0.311-0.633,0.471-1.704,0.971-2.035c1.08,0.477,2.301,0.602,3.354,1.086c1.021,0.735,2.377,0.739,3.555,1.117c1.113-0.188,1.9,0.748,2.982,0.826c0.662,0.378,0.988,1.366,1.473,0.288c0.914,0.444,1.156-0.983,2.004-0.165c1.35,0.521,0.813-0.161,0.648-1.054c0.242-0.671-0.734-1.882,0.02-2.185c1.393,0.006,2.742,0.221,3.537-1.042c0.711-0.429,0.939-1.226,1.672-1.695c0.463-0.791,0.645-1.223,1.674-0.699c0.619-0.606,1.018-0.546,1.795-0.293c0.842-0.307,1.844-0.781,2.6-0.021c1.486,0.688,2.096,2.608,3.803,2.893c1.332,0.163,4.258,2.451,3.432-0.371c0.41-0.56,0.197-1.613-0.408-2.096c0.518-0.486,0.49-1.75-0.467-1.588c-0.725,0.364-1.271,0.843-1.504-0.022c-0.436,1.041-1.082-0.19-1.082-0.522c-1.279-0.684,0.926-2.015-0.564-2.126c0.469,0.78-1.021,1.4-1.188,0.466c-0.217-0.782,0.598-1.475,0.17-2.035c0.352-0.808,0.439-1.618,0.061-2.433c-0.297-0.792-0.125-1.527,0.338-2.211c0.402-0.818,0.84-1.627,0.727-2.563c0.162-1.15,0.334-2.302,0.783-3.385c-0.805,0.04-0.82-0.773-1.781-0.72c0.27-1.317,0.834-2.556,0.975-3.898c-0.768-0.324-1.453,0.049-2.168,0.119c-1.014,0.118-1.227-0.82-2.066-1.093c0.035-0.828-1.18-1.05-0.434-1.896c0.283-0.646,1.102-1.487,0.027-1.877c-1.115-0.69-2.414-1.128-3.74-0.974c-0.27,0.556,0.225,1.48,0.201,2.189c0.121,0.61-0.443,2.035-1.088,1.1c-1.48-1.11-2.988-2.184-4.504-3.246c-0.125-1.07,0.311-2.281-0.34-3.22c-0.018-0.804,0.096-1.685-0.854-1.976C730.922,109.444,730.504,109.25,730.114,109.016z" /></a>
    </svg>
</div>
<?php
}

// prints first 5-7 polls
function printList($mapData, $pollCount = 10, $partyLimit = 7) {
  echo '<ul class="pollList column-1">';
  $halfNumber = round($pollCount / 2) - 1;
  for ($i = 0; $i < $pollCount; $i++) {
?>
    <li class="<?php echo $mapData[$i]->pollId; ?>">
          <div class="pollInfo"><?php echo $mapData[$i]->pollDate . ' ' . $mapData[$i]->mediaDepartment . ' (n=' . $mapData[$i]->pollDimension . ')'; ?></div>
          <div class="pollData">
              <span class="pollName"><?php echo $mapData[$i]->pollName; ?></span>
              <ol class="results">
<?php
            $partyCount = 0;
            foreach ($mapData[$i]->results as $result) {
?>
                <li class="<?php echo $result->partyId; ?>"><?php echo $result->percentage; ?></li>
<?php
                $partyCount++;
                if ($partyLimit !== null && $partyCount >= $partyLimit) {
                    break;
                }
            }
?>
              </ol>
          </div>
      </li>
<?php

    if ($i == $halfNumber) {
      echo '</ul>';
      echo '<ul class="pollList column-2">';
    }
  }
  echo '</ul>';
}

?>
