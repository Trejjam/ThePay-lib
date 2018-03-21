<?php
declare(strict_types=1);

namespace Tp\DataApi\Parameters;

use DateTimeImmutable;
use Tp\DataApi\DataApiObject;
use Tp\DataApi\ValueFormatter;

class Payment extends DataApiObject
{

	/**
	 * @var int|null
	 */
	protected $id;

	/**
	 * @var int|null
	 */
	protected $account;

	/**
	 * @var int|null
	 */
	protected $state;

	/**
	 * @var DateTimeImmutable|null
	 */
	protected $createdOn;

	/**
	 * @var DateTimeImmutable|null
	 */
	protected $finishedOn;

	/**
	 * @var DateTimeImmutable|null
	 */
	protected $canceledOn;

	/**
	 * @var int|null
	 */
	protected $payOff;

	/**
	 * @var int|null
	 */
	protected $payOffCancel;

	/**
	 * @var float|null
	 */
	protected $value;

	/**
	 * @var float|null
	 */
	protected $receivedValue;

	/**
	 * @var int|null
	 */
	protected $currency;

	/**
	 * @var float|null
	 */
	protected $fee;

	/**
	 * @var string|null
	 */
	protected $description;

	/**
	 * @var string|null
	 */
	protected $merchantData;

	/**
	 * @var int|null
	 */
	protected $paymentMethod;

	/**
	 * @var string|null
	 */
	protected $specificSymbol;

	/**
	 * @var string|null
	 */
	protected $merchantSpecificSymbol;

	/**
	 * @var string|null
	 */
	protected $accountNumber;

	/**
	 * @var string|null
	 */
	protected $accountOwnerName;

	/**
	 * @var string|null
	 */
	protected $returnUrl;

	/**
	 * @var int|null
	 */
	protected $permanentPayment;

	/**
	 * @var bool|null
	 */
	protected $deposit;

	/**
	 * @var bool|null
	 */
	protected $recurring;

	/**
	 * @var string|null
	 */
	protected $ip;

	/**
	 * @var string|null
	 */
	protected $customerEmail;

	/**
	 * @var string|null
	 */
	protected $fik;

	/**
	 * @var string|null
	 */
	protected $bkp;

	/**
	 * @var string|null
	 */
	protected $pkp;

	/**
	 * @var string|null
	 */
	protected $receiptUrl;

	/**
	 * @var bool|null
	 */
	protected $firstSuccess;

	/**
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}

	public function setId(int $id = NULL) : void
	{
		$this->id = $id;
	}

	public function getAccount() : ?int
	{
		return $this->account;
	}

	public function setAccount(int $account = NULL) : void
	{
		$this->account = $account;
	}

	public function getState() : ?int
	{
		return $this->state;
	}

	public function setState(int $state = NULL) : void
	{
		$this->state = $state;
	}

	public function getCreatedOn() : ?DateTimeImmutable
	{
		return $this->createdOn;
	}

	public function setCreatedOn(DateTimeImmutable $createdOn = NULL) : void
	{
		$this->createdOn = $createdOn;
	}

	public function getFinishedOn() : ?DateTimeImmutable
	{
		return $this->finishedOn;
	}

	public function setFinishedOn(DateTimeImmutable $finishedOn = NULL) : void
	{
		$this->finishedOn = $finishedOn;
	}

	public function getCanceledOn() : ?DateTimeImmutable
	{
		return $this->canceledOn;
	}

	public function setCanceledOn(DateTimeImmutable $canceledOn = NULL) : void
	{
		$this->canceledOn = $canceledOn;
	}

	public function getPayOff() : ?int
	{
		return $this->payOff;
	}

	public function setPayOff(int $payOff = NULL) : void
	{
		$this->payOff = $payOff;
	}

	public function getPayOffCancel() : ?int
	{
		return $this->payOffCancel;
	}

	public function setPayOffCancel(int $payOffCancel = NULL) : void
	{
		$this->payOffCancel = $payOffCancel;
	}

	public function getValue() : ?float
	{
		return $this->value;
	}

	public function setValue(float $value = NULL) : void
	{
		$this->value = $value;
	}

	public function getReceivedValue() : ?float
	{
		return $this->receivedValue;
	}

	public function setReceivedValue(float $receivedValue = NULL) : void
	{
		$this->receivedValue = $receivedValue;
	}

	public function getCurrency() : ?int
	{
		return $this->currency;
	}

	public function setCurrency(?int $currency) : void
	{
		$this->currency = $currency;
	}

	public function getFee() : ?float
	{
		return $this->fee;
	}

	public function setFee(?float $fee) : void
	{
		$this->fee = $fee;
	}

	public function getDescription() : ?string
	{
		return $this->description;
	}

	public function setDescription(string $description = NULL) : void
	{
		$this->description = $description;
	}

	public function getMerchantData() : ?string
	{
		return $this->merchantData;
	}

	public function setMerchantData(string $merchantData = NULL) : void
	{
		$this->merchantData = $merchantData;
	}

	public function getPaymentMethod() : ?int
	{
		return $this->paymentMethod;
	}

	public function setPaymentMethod(?int $paymentMethod) : void
	{
		$this->paymentMethod = $paymentMethod;
	}

	public function getSpecificSymbol() : ?string
	{
		return $this->specificSymbol;
	}

	public function setSpecificSymbol(string $specificSymbol = NULL) : void
	{
		$this->specificSymbol = $specificSymbol;
	}

	public function getMerchantSpecificSymbol() : ?string
	{
		return $this->merchantSpecificSymbol;
	}

	public function setMerchantSpecificSymbol(string $merchantSpecificSymbol = NULL) : void
	{
		$this->merchantSpecificSymbol = $merchantSpecificSymbol;
	}

	public function getAccountNumber() : ?string
	{
		return $this->accountNumber;
	}

	public function setAccountNumber(string $accountNumber = NULL) : void
	{
		$this->accountNumber = $accountNumber;
	}

	public function getAccountOwnerName() : ?string
	{
		return $this->accountOwnerName;
	}

	public function setAccountOwnerName(string $accountOwnerName = NULL) : void
	{
		$this->accountOwnerName = $accountOwnerName;
	}

	public function getReturnUrl() : ?string
	{
		return $this->returnUrl;
	}

	public function setReturnUrl(string $returnUrl = NULL) : void
	{
		$this->returnUrl = $returnUrl;
	}

	public function getPermanentPayment() : ?int
	{
		return $this->permanentPayment;
	}

	public function setPermanentPayment(int $permanentPayment = NULL) : void
	{
		$this->permanentPayment = $permanentPayment;
	}

	public function getDeposit() : ?bool
	{
		return $this->deposit;
	}

	public function setDeposit(bool $deposit = NULL) : void
	{
		$this->deposit = $deposit;
	}

	public function getRecurring() : ?bool
	{
		return $this->recurring;
	}

	public function setRecurring(bool $recurring = NULL) : void
	{
		$this->recurring = $recurring;
	}

	public function getIp() : ?string
	{
		return $this->ip;
	}

	public function setIp(string $ip = NULL) : void
	{
		$this->ip = $ip;
	}

	public function getCustomerEmail() : ?string
	{
		return $this->customerEmail;
	}

	public function setCustomerEmail(string $customerEmail = NULL) : void
	{
		$this->customerEmail = $customerEmail;
	}

	public function getFik() : ?string
	{
		return $this->fik;
	}

	public function setFik(string $fik = NULL) : void
	{
		$this->fik = $fik;
	}

	public function getBkp() : ?string
	{
		return $this->bkp;
	}

	public function setBkp(string $bkp = NULL) : void
	{
		$this->bkp = $bkp;
	}

	public function getPkp() : ?string
	{
		return $this->pkp;
	}

	public function setPkp(string $pkp = NULL) : void
	{
		$this->pkp = $pkp;
	}

	public function getReceiptUrl() : ?string
	{
		return $this->receiptUrl;
	}

	public function setReceiptUrl(string $receiptUrl = NULL) : void
	{
		$this->receiptUrl = $receiptUrl;
	}

	public function getFirstSuccess() : ?bool
	{
		return $this->firstSuccess;
	}

	public function setFirstSuccess(bool $firstSuccess = NULL) : void
	{
		$this->firstSuccess = $firstSuccess;
	}
}
