<?php

namespace App\Service;

use App\Enum\HealthStatus;

class GithubService {
	public function getHealthReport(string $dinosaurName): HealthStatus{
		// Call GitHub API

		// Filter the issues

		return HealthStatus::HEALTHY;
	}
}
