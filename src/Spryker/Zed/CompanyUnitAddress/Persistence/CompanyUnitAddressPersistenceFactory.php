<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyUnitAddress\Persistence;

use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery;
use Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnitQuery;
use Spryker\Zed\CompanyUnitAddress\CompanyUnitAddressDependencyProvider;
use Spryker\Zed\CompanyUnitAddress\Persistence\Mapper\CompanyUnitAddressMapper;
use Spryker\Zed\CompanyUnitAddress\Persistence\Mapper\CompanyUnitAddressMapperInterface;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Spryker\Zed\CompanyUnitAddress\Persistence\CompanyUnitAddressQueryContainerInterface getQueryContainer()
 */
class CompanyUnitAddressPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressQuery
     */
    public function createCompanyUnitAddressQuery(): SpyCompanyUnitAddressQuery
    {
        return SpyCompanyUnitAddressQuery::create();
    }

    /**
     * @return \Spryker\Zed\CompanyUnitAddress\Persistence\Mapper\CompanyUnitAddressMapperInterface
     */
    public function createCompanyUniAddressMapper(): CompanyUnitAddressMapperInterface
    {
        return new CompanyUnitAddressMapper(
            $this->getCompanyUnitAddressEntityTransferHydratorPlugins(),
            $this->getCompanyUnitAddressTransferHydratorPlugins()
        );
    }

    /**
     * @return \Orm\Zed\CompanyUnitAddress\Persistence\SpyCompanyUnitAddressToCompanyBusinessUnitQuery
     */
    public function createCompanyUnitAddressToCompanyBusinessUnitQuery(): SpyCompanyUnitAddressToCompanyBusinessUnitQuery
    {
        return SpyCompanyUnitAddressToCompanyBusinessUnitQuery::create();
    }

    /**
     * @return \Spryker\Zed\CompanyUnitAddressExtension\Communication\Plugin\CompanyUnitAddressEntityTransferHydratorPluginInterface[]
     */
    protected function getCompanyUnitAddressEntityTransferHydratorPlugins()
    {
        return $this->getProvidedDependency(CompanyUnitAddressDependencyProvider::PLUGINS_ADDRESS_ENTITY_TRANSFER_HYDRATOR);
    }

    protected function getCompanyUnitAddressTransferHydratorPlugins()
    {
        return $this->getProvidedDependency(CompanyUnitAddressDependencyProvider::PLUGINS_ADDRESS_TRANSFER_HYDRATOR);
    }
}
