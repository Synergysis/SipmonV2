<?php

/*
 * Copyright 2005 - 2022 Centreon (https://www.centreon.com/)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * For more information : contact@centreon.com
 *
 */

namespace CentreonRemote\Domain\Resources\DefaultConfig;

/**
 * Get broker configuration template
 */
class NagiosServer
{
    /**
     * Get template configuration
     * @todo move it as yml
     *
     * @return array<string, int|string>
     */
    public static function getConfiguration(): array
    {
        return [
            'name'                       => 'Central',
            'localhost'                  => '1',
            'is_default'                 => 1,
            'last_restart'               => 0,
            'ns_ip_address'              => '127.0.0.1',
            'ns_activate'                => '1',
            'ns_status'                  => '0',
            'engine_start_command'       => 'service centengine start',
            'engine_stop_command'        => 'service centengine stop',
            'engine_restart_command'     => 'service centengine restart',
            'engine_reload_command'      => 'service centengine reload',
            'nagios_bin'                 => '@monitoring_binary@',
            'nagiostats_bin'             => '@centreon_engine_stats_binary@',
            'nagios_perfdata'            => '@monitoring_varlog@/service-perfdata',
            'centreonbroker_cfg_path'    => '@broker_etc@',
            'centreonbroker_module_path' => '@centreonbroker_lib@',
            'centreonconnector_path'     => '@centreon_engine_connectors@',
            'ssh_port'                   => 22,
            'gorgone_communication_type' => '1',
            'gorgone_port'               => 5556,
            'init_script_centreontrapd'  => 'centreontrapd',
            'snmp_trapd_path_conf'       => '/etc/snmp/centreon_traps/',
        ];
    }
}
