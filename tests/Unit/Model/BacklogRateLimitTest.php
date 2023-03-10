<?php

namespace tests\Unit\Model;

use Takuya\BacklogApiClient\Backlog;

class BacklogRateLimitTest extends TestCaseBacklogModels {
  
  
  public function test_get_api_rate_limit () {
    $this->cli->space()->projects( Backlog::PROJECTS_ONLY_MINE );
    $ret = $this->cli->rate_limit();
    $this->assertArrayHasKeyOfList( [
      "rate-limit-will-all-reset",
      "rate-limit-per-minute",
      "rate-limit-count-remains",
    ], $ret );
  }
}