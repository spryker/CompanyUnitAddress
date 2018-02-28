<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CompanyUnitAddress;

use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer;
use Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer;
use Generated\Shared\Transfer\CompanyUnitAddressTransfer;

interface CompanyUnitAddressClientInterface
{
    /**
     * Specification:
     * - Finds a company unit address by CompanyUnitAddressTransfer::idCompanyUnitAddress in the transfer
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressTransfer
     */
    public function getCompanyUnitAddressById(
        CompanyUnitAddressTransfer $companyUnitAddressTransfer
    ): CompanyUnitAddressTransfer;

    /**
     * Specification:
     * - Creates a company unit address
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer
     */
    public function createCompanyUnitAddress(
        CompanyUnitAddressTransfer $companyUnitAddressTransfer
    ): CompanyUnitAddressResponseTransfer;

    /**
     * Specification:
     * - Finds a company unit address by CompanyUnitAddressTransfer::idCompanyUnitAddress in the transfer
     * - Updates fields in a company unit address entity
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressResponseTransfer
     */
    public function updateCompanyUnitAddress(CompanyUnitAddressTransfer $companyUnitAddressTransfer): CompanyUnitAddressResponseTransfer;

    /**
     * Specification:
     * - Finds a company unit address by CompanyUnitAddressTransfer::idCompanyUnitAddress in the transfer
     * - Deletes the company unit address
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressTransfer $companyUnitAddressTransfer
     *
     * @return void
     */
    public function deleteCompanyUnitAddress(
        CompanyUnitAddressTransfer $companyUnitAddressTransfer
    ): void;

    /**
     * Specification:
     * - Returns the company unit address collection.
     *
     * @api
     *
     * @deprecated
     *
     * @param \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer $companyUnitAddressCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyUnitAddressCollectionTransfer
     */
    public function getCompanyUnitAddressCollection(
        CompanyUnitAddressCollectionTransfer $companyUnitAddressCollectionTransfer
    ): CompanyUnitAddressCollectionTransfer;

    /**
     * Specification:
     * - Saves Company Business Unit address collection
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return void
     */
    public function saveCompanyBusinessUnitAddresses(
        CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): void;
}
