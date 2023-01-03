<?php

namespace App\Tests\Service;

use App\Enum\HealthStatus;
use PHPUnit\Framework\TestCase;
use App\Service\GithubService;
use Psr\Log\LoggerInterface;

class GithubServiceTest extends TestCase {
	/**
	 * @dataProvider dinoNameProvider
	 */
	public function testGetHealthReportReturnsCorrectHealthStatusForDino(HealthStatus $expectedStatus, string $dinoName): void{
		$mockLogger = $this->createMock(LoggerInterface::class);
		
		$service = new GithubService($mockLogger);

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
