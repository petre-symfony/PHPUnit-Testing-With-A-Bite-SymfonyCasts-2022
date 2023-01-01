<?php

namespace App\Tests\Service;

use App\Enum\HealthStatus;
use PHPUnit\Framework\TestCase;

class GithubServiceTest extends TestCase {
	/**
	 * @dataProvider dinoNameProvider
	 */
	public function testGetHealthReportReturnsCorrectHealthStatusForDino(HealthStatus $expectedStatus, string $dinoName): void{
		$service = new GithubService();

		self::assertSame($expectedStatus, $service->getHealthReport($dinoName));
	}

	public function dinoNameProvider(): \Generator {
		yield 'Sick Dino' => [
			HealthStatus::SICK,
			'Daisy'
		];

		yield 'Healthy Dino' => [
			HealthStatus::HEALTHY,
			'Maverick'
		];
	}
}
