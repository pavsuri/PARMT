<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // vlreleases_user_homepage
        if (rtrim($pathinfo, '/') === '/dashboard') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vlreleases_user_homepage');
            }

            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'vlreleases_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // vlreleases_user_login
            if ($pathinfo === '/user/login') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'vlreleases_user_login',);
            }

            if (0 === strpos($pathinfo, '/user/forgotPassword')) {
                // vlreleases_user_forgotPassword
                if ($pathinfo === '/user/forgotPassword') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::forgotPasswordAction',  '_route' => 'vlreleases_user_forgotPassword',);
                }

                // vlreleases_user_forgotPasswordGeneration
                if ($pathinfo === '/user/forgotPasswordGeneration') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::forgotPasswordGenerationAction',  '_route' => 'vlreleases_user_forgotPasswordGeneration',);
                }

            }

            if (0 === strpos($pathinfo, '/user/register')) {
                // vlreleases_user_register
                if ($pathinfo === '/user/register') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::registerAction',  '_route' => 'vlreleases_user_register',);
                }

                // vlreleases_user_registerStatus
                if ($pathinfo === '/user/registerStatus') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::registerStatusAction',  '_route' => 'vlreleases_user_registerStatus',);
                }

            }

            // vlreleases_user_upload
            if ($pathinfo === '/user/upload') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::uploadAction',  '_route' => 'vlreleases_user_upload',);
            }

            if (0 === strpos($pathinfo, '/user/getRegister')) {
                // vlreleases_user_getRegisterData
                if ($pathinfo === '/user/getRegisterData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::getRegisterDataAction',  '_route' => 'vlreleases_user_getRegisterData',);
                }

                // vlreleases_user_getRegisterPhoto
                if ($pathinfo === '/user/getRegisterPhoto') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::getRegisterPhotoAction',  '_route' => 'vlreleases_user_getRegisterPhoto',);
                }

            }

            // vlreleases_user_logout
            if ($pathinfo === '/user/logout') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::logoutAction',  '_route' => 'vlreleases_user_logout',);
            }

            // vlreleases_user_displayProfile
            if ($pathinfo === '/user/displayProfile') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::displayProfileAction',  '_route' => 'vlreleases_user_displayProfile',);
            }

            // vlreleases_user_getEmailProfile
            if ($pathinfo === '/user/getEmailProfile') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::getEmailProfileAction',  '_route' => 'vlreleases_user_getEmailProfile',);
            }

            // vlreleases_user_usersProfile
            if ($pathinfo === '/user/usersProfile') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::usersProfileAction',  '_route' => 'vlreleases_user_usersProfile',);
            }

            // vlreleases_user_reportersProfile
            if ($pathinfo === '/user/reportersProfile') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::reportersProfileAction',  '_route' => 'vlreleases_user_reportersProfile',);
            }

            if (0 === strpos($pathinfo, '/user/search')) {
                // vlreleases_user_searchByName
                if ($pathinfo === '/user/searchByName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::searchByNameAction',  '_route' => 'vlreleases_user_searchByName',);
                }

                // vlreleases_user_searchReporter
                if ($pathinfo === '/user/searchReporter') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::searchReporterAction',  '_route' => 'vlreleases_user_searchReporter',);
                }

            }

            if (0 === strpos($pathinfo, '/user/filter')) {
                // vlreleases_user_filterUserData
                if ($pathinfo === '/user/filterUserData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::filterUserDataAction',  '_route' => 'vlreleases_user_filterUserData',);
                }

                // vlreleases_user_filterReporterData
                if ($pathinfo === '/user/filterReporterData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::filterReporterDataAction',  '_route' => 'vlreleases_user_filterReporterData',);
                }

            }

            if (0 === strpos($pathinfo, '/user/dailystatus')) {
                // vlreleases_user_dailystatus
                if ($pathinfo === '/user/dailystatus') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserDailyStatusController::dailystatusAction',  '_route' => 'vlreleases_user_dailystatus',);
                }

                // vlreleases_user_dailystatus_delete
                if ($pathinfo === '/user/dailystatus/deleteTask') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserDailyStatusController::deleteTaskAction',  '_route' => 'vlreleases_user_dailystatus_delete',);
                }

            }

            // vlreleases_user_dailystatus_submithours
            if ($pathinfo === '/user/submitHours') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserDailyStatusController::submitHoursAction',  '_route' => 'vlreleases_user_dailystatus_submithours',);
            }

        }

        // vlreleases_user_lead
        if (rtrim($pathinfo, '/') === '/leaddashboard') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vlreleases_user_lead');
            }

            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\LeadDashboardController::leadDashboardAction',  '_route' => 'vlreleases_user_lead',);
        }

        // vlreleases_user_getMenus
        if ($pathinfo === '/default/getMenus') {
            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\DefaultController::getMenusAction',  '_route' => 'vlreleases_user_getMenus',);
        }

        if (0 === strpos($pathinfo, '/leaddashboard')) {
            // vlreleases_user_lead_getMenus
            if ($pathinfo === '/leaddashboard/getMenus') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\LeadDashboardController::getMenusAction',  '_route' => 'vlreleases_user_lead_getMenus',);
            }

            // vlreleases_approvalList_approvalList
            if ($pathinfo === '/leaddashboard/approvalList') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ApprovalListController::approvalListAction',  '_route' => 'vlreleases_approvalList_approvalList',);
            }

        }

        // vlreleases_user_manager
        if (rtrim($pathinfo, '/') === '/managerdashboard') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vlreleases_user_manager');
            }

            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ManagerDashboardController::managerDashboardAction',  '_route' => 'vlreleases_user_manager',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // vlreleases_user_taskapproval
            if (rtrim($pathinfo, '/') === '/user/taskapproval') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_user_taskapproval');
                }

                return array (  '_controller' => 'VlreleasesUserBundle:UserTaskApproval:taskApproval',  '_route' => 'vlreleases_user_taskapproval',);
            }

            // vlreleases_user_resetPassword
            if (rtrim($pathinfo, '/') === '/user/resetPassword') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_user_resetPassword');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserController::resetPasswordAction',  '_route' => 'vlreleases_user_resetPassword',);
            }

        }

        // vlreleases_resourceNames_getResourcesNames
        if (rtrim($pathinfo, '/') === '/resourceNames/getResourcesNames') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vlreleases_resourceNames_getResourcesNames');
            }

            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ResourceNamesController::getResourcesNamesAction',  '_route' => 'vlreleases_resourceNames_getResourcesNames',);
        }

        if (0 === strpos($pathinfo, '/liveApps')) {
            // vlreleases_liveApps
            if (rtrim($pathinfo, '/') === '/liveApps/index') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_liveApps');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\LiveAppsController::indexAction',  '_route' => 'vlreleases_liveApps',);
            }

            // vlreleases_liveApps_getAppData
            if (rtrim($pathinfo, '/') === '/liveApps/getAppData') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_liveApps_getAppData');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\LiveAppsController::getAppDataAction',  '_route' => 'vlreleases_liveApps_getAppData',);
            }

            // vlreleases_liveApps_clickRegister
            if (rtrim($pathinfo, '/') === '/liveApps/clickRegister') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_liveApps_clickRegister');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\LiveAppsController::clickRegisterAction',  '_route' => 'vlreleases_liveApps_clickRegister',);
            }

        }

        if (0 === strpos($pathinfo, '/u')) {
            if (0 === strpos($pathinfo, '/upload')) {
                // vlreleases_upload
                if (rtrim($pathinfo, '/') === '/upload/index') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vlreleases_upload');
                    }

                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UploadController::indexAction',  '_route' => 'vlreleases_upload',);
                }

                // vlreleases_upload_uploadFile
                if (rtrim($pathinfo, '/') === '/upload/uploadFile') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vlreleases_upload_uploadFile');
                    }

                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UploadController::uploadFileAction',  '_route' => 'vlreleases_upload_uploadFile',);
                }

                if (0 === strpos($pathinfo, '/uploadFile')) {
                    // vlreleases_uploadFile
                    if (rtrim($pathinfo, '/') === '/uploadFile') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vlreleases_uploadFile');
                        }

                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UploadFileController::indexAction',  '_route' => 'vlreleases_uploadFile',);
                    }

                    // vlreleases_uploadFile_fileUpload
                    if (rtrim($pathinfo, '/') === '/uploadFile/fileUpload') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vlreleases_uploadFile_fileUpload');
                        }

                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UploadFileController::fileUploadAction',  '_route' => 'vlreleases_uploadFile_fileUpload',);
                    }

                    // vlreleases_uploadFile_deleteUploadedFile
                    if (rtrim($pathinfo, '/') === '/uploadFile/deleteUploadedFile') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vlreleases_uploadFile_deleteUploadedFile');
                        }

                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UploadFileController::deleteUploadedFileAction',  '_route' => 'vlreleases_uploadFile_deleteUploadedFile',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/user')) {
                // vlreleases_user_updateapprovals
                if (rtrim($pathinfo, '/') === '/user/updateapprovals') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vlreleases_user_updateapprovals');
                    }

                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserTaskApprovalController::updateApprovalsAction',  '_route' => 'vlreleases_user_updateapprovals',);
                }

                // vlreleases_user_emailUpdateApprovals
                if (rtrim($pathinfo, '/') === '/user/emailUpdateApprovals') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vlreleases_user_emailUpdateApprovals');
                    }

                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserTaskApprovalController::emailUpdateApprovalsAction',  '_route' => 'vlreleases_user_emailUpdateApprovals',);
                }

                if (0 === strpos($pathinfo, '/userprofile')) {
                    // vlreleases_user_profile_home
                    if (rtrim($pathinfo, '/') === '/userprofile') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'vlreleases_user_profile_home');
                        }

                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::indexAction',  '_route' => 'vlreleases_user_profile_home',);
                    }

                    // vlreleases_user_upload_photo
                    if ($pathinfo === '/userprofile/uploadphoto') {
                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::uploadPhotoAction',  '_route' => 'vlreleases_user_upload_photo',);
                    }

                    // vlreleases_user_profile_getProjects
                    if ($pathinfo === '/userprofile/getProjects') {
                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::getProjectsAction',  '_route' => 'vlreleases_user_profile_getProjects',);
                    }

                    if (0 === strpos($pathinfo, '/userprofile/handle')) {
                        if (0 === strpos($pathinfo, '/userprofile/handleP')) {
                            // vlreleases_user_profile_handlePersonalProfileData
                            if ($pathinfo === '/userprofile/handlePersonalProfileData') {
                                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::handlePersonalProfileDataAction',  '_route' => 'vlreleases_user_profile_handlePersonalProfileData',);
                            }

                            // vlreleases_user_profile_handleProjectProfileData
                            if ($pathinfo === '/userprofile/handleProjectProfileData') {
                                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::handleProjectProfileDataAction',  '_route' => 'vlreleases_user_profile_handleProjectProfileData',);
                            }

                        }

                        // vlreleases_user_profile_handleWorkProfileData
                        if ($pathinfo === '/userprofile/handleWorkProfileData') {
                            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::handleWorkProfileDataAction',  '_route' => 'vlreleases_user_profile_handleWorkProfileData',);
                        }

                    }

                }

            }

        }

        // vlreleases_mobiledevice_register
        if ($pathinfo === '/mobiledevice/register') {
            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::registerAction',  '_route' => 'vlreleases_mobiledevice_register',);
        }

        if (0 === strpos($pathinfo, '/userprofile')) {
            // vlreleases_user_profile_handleSkillsData
            if ($pathinfo === '/userprofile/handleSkillsData') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::handleSkillsDataAction',  '_route' => 'vlreleases_user_profile_handleSkillsData',);
            }

            if (0 === strpos($pathinfo, '/userprofile/get')) {
                // vlreleases_user_profile_getSkills
                if ($pathinfo === '/userprofile/getSkills') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::getSkillsAction',  '_route' => 'vlreleases_user_profile_getSkills',);
                }

                // vlreleases_user_profile_getReportingLead
                if ($pathinfo === '/userprofile/getReportingLead') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::getReportingLeadAction',  '_route' => 'vlreleases_user_profile_getReportingLead',);
                }

                // vlreleases_user_profile_getLead
                if ($pathinfo === '/userprofile/getLead') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\UserProfileController::getLeadAction',  '_route' => 'vlreleases_user_profile_getLead',);
                }

            }

        }

        // vlreleases_cron
        if (rtrim($pathinfo, '/') === '/cron') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vlreleases_cron');
            }

            return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CronController::assetDelayAction',  '_route' => 'vlreleases_cron',);
        }

        if (0 === strpos($pathinfo, '/mobiledevice')) {
            // vlreleases_mobiledevice
            if (rtrim($pathinfo, '/') === '/mobiledevice') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_mobiledevice');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::indexAction',  '_route' => 'vlreleases_mobiledevice',);
            }

            // vlreleases_mobiledevice_delete
            if ($pathinfo === '/mobiledevice/delete') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::deleteAction',  '_route' => 'vlreleases_mobiledevice_delete',);
            }

            // vlreleases_mobiledevice_take
            if ($pathinfo === '/mobiledevice/take') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::takeAction',  '_route' => 'vlreleases_mobiledevice_take',);
            }

            if (0 === strpos($pathinfo, '/mobiledevice/re')) {
                // vlreleases_mobiledevice_return
                if ($pathinfo === '/mobiledevice/return') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::returnAction',  '_route' => 'vlreleases_mobiledevice_return',);
                }

                // vlreleases_mobiledevice_request
                if ($pathinfo === '/mobiledevice/request') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::requestAction',  '_route' => 'vlreleases_mobiledevice_request',);
                }

            }

            // vlreleases_mobiledevice_cancel_request
            if ($pathinfo === '/mobiledevice/cancelrequest') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::cancelRequestAction',  '_route' => 'vlreleases_mobiledevice_cancel_request',);
            }

            // vlreleases_mobiledevice_queuelist
            if ($pathinfo === '/mobiledevice/queuelist') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::queueListAction',  '_route' => 'vlreleases_mobiledevice_queuelist',);
            }

            // vlreleases_mobiledevice_getListBySearchCriteria
            if ($pathinfo === '/mobiledevice/getlistbysearch') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::getlistbysearchAction',  '_route' => 'vlreleases_mobiledevice_getListBySearchCriteria',);
            }

            // vlreleases_mobiledevice_listDevice
            if ($pathinfo === '/mobiledevice/listDevice') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::listDeviceAction',  '_route' => 'vlreleases_mobiledevice_listDevice',);
            }

            // vlreleases_mobiledevice_clickregister
            if ($pathinfo === '/mobiledevice/clickRegister') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::clickRegisterAction',  '_route' => 'vlreleases_mobiledevice_clickregister',);
            }

            // vlreleases_mobiledevice_listDeviceName
            if ($pathinfo === '/mobiledevice/listDeviceName') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::listDeviceNameAction',  '_route' => 'vlreleases_mobiledevice_listDeviceName',);
            }

            if (0 === strpos($pathinfo, '/mobiledevice/takeDevice')) {
                // vlreleases_mobiledevice_takedeviceList
                if ($pathinfo === '/mobiledevice/takeDeviceList') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::takeDeviceListAction',  '_route' => 'vlreleases_mobiledevice_takedeviceList',);
                }

                // vlreleases_mobiledevice_takedevicesearchlist
                if ($pathinfo === '/mobiledevice/takeDeviceSearchList') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\MobileDeviceController::takeDeviceSearchListAction',  '_route' => 'vlreleases_mobiledevice_takedevicesearchlist',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // vlreleases_categories_clickregister
            if ($pathinfo === '/categories/clickRegister') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CategoriesController::clickRegisterAction',  '_route' => 'vlreleases_categories_clickregister',);
            }

            // vlreleases_categories
            if (rtrim($pathinfo, '/') === '/categories') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_categories');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'vlreleases_categories',);
            }

            // vlreleases_categories_register
            if ($pathinfo === '/categories/Register') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CategoriesController::RegisterAction',  '_route' => 'vlreleases_categories_register',);
            }

            if (0 === strpos($pathinfo, '/categories/listDevice')) {
                // vlreleases_categories_listDevice
                if ($pathinfo === '/categories/listDevice') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CategoriesController::listDeviceAction',  '_route' => 'vlreleases_categories_listDevice',);
                }

                // vlreleases_categories_listDeviceName
                if ($pathinfo === '/categories/listDeviceName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\CategoriesController::listDeviceNameAction',  '_route' => 'vlreleases_categories_listDeviceName',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/products')) {
            // vlreleases_products_clickregister
            if ($pathinfo === '/products/clickRegister') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::clickRegisterAction',  '_route' => 'vlreleases_products_clickregister',);
            }

            // vlreleases_products
            if (rtrim($pathinfo, '/') === '/products') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vlreleases_products');
                }

                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::indexAction',  '_route' => 'vlreleases_products',);
            }

            // vlreleases_products_register
            if ($pathinfo === '/products/Register') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::RegisterAction',  '_route' => 'vlreleases_products_register',);
            }

            if (0 === strpos($pathinfo, '/products/listDevice')) {
                // vlreleases_products_listDevice
                if ($pathinfo === '/products/listDevice') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::listDeviceAction',  '_route' => 'vlreleases_products_listDevice',);
                }

                // vlreleases_products_listDeviceName
                if ($pathinfo === '/products/listDeviceName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::listDeviceNameAction',  '_route' => 'vlreleases_products_listDeviceName',);
                }

            }

            if (0 === strpos($pathinfo, '/products/take')) {
                if (0 === strpos($pathinfo, '/products/takeAsset')) {
                    // vlreleases_products_takeassetList
                    if ($pathinfo === '/products/takeAssetList') {
                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::takeAssetListAction',  '_route' => 'vlreleases_products_takeassetList',);
                    }

                    // vlreleases_products_takeassetsearchlist
                    if ($pathinfo === '/products/takeAssetSearchList') {
                        return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::takeAssetSearchListAction',  '_route' => 'vlreleases_products_takeassetsearchlist',);
                    }

                }

                // vlreleases_products_take
                if ($pathinfo === '/products/take') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::takeAction',  '_route' => 'vlreleases_products_take',);
                }

            }

            if (0 === strpos($pathinfo, '/products/re')) {
                // vlreleases_products_return
                if ($pathinfo === '/products/return') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::returnAction',  '_route' => 'vlreleases_products_return',);
                }

                // vlreleases_products_request
                if ($pathinfo === '/products/request') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::requestAction',  '_route' => 'vlreleases_products_request',);
                }

            }

            // vlreleases_products_cancel_request
            if ($pathinfo === '/products/cancelrequest') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::cancelRequestAction',  '_route' => 'vlreleases_products_cancel_request',);
            }

            // vlreleases_products_queuelist
            if ($pathinfo === '/products/queuelist') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::queueListAction',  '_route' => 'vlreleases_products_queuelist',);
            }

            // vlreleases_products_getListBySearchCriteria
            if ($pathinfo === '/products/getlistbysearch') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProductsController::getlistbysearchAction',  '_route' => 'vlreleases_products_getListBySearchCriteria',);
            }

        }

        if (0 === strpos($pathinfo, '/Projects')) {
            if (0 === strpos($pathinfo, '/Projects/projects')) {
                // vlreleases_projects_projectsList
                if ($pathinfo === '/Projects/projectsList') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::projectsListAction',  '_route' => 'vlreleases_projects_projectsList',);
                }

                // vlreleases_projects_projectsCreation
                if ($pathinfo === '/Projects/projectsCreation') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::projectsCreationAction',  '_route' => 'vlreleases_projects_projectsCreation',);
                }

            }

            if (0 === strpos($pathinfo, '/Projects/get')) {
                // vlreleases_projects_getProjectData
                if ($pathinfo === '/Projects/getProjectData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getProjectDataAction',  '_route' => 'vlreleases_projects_getProjectData',);
                }

                // vlreleases_projects_getAddProjectFormData
                if ($pathinfo === '/Projects/getAddProjectFormData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getAddProjectFormDataAction',  '_route' => 'vlreleases_projects_getAddProjectFormData',);
                }

                // vlreleases_projects_getPlatformId
                if ($pathinfo === '/Projects/getPlatformId') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getPlatformIdAction',  '_route' => 'vlreleases_projects_getPlatformId',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/projects')) {
            if (0 === strpos($pathinfo, '/projects/clickRegister')) {
                // vlreleases_projects_clickRegister
                if ($pathinfo === '/projects/clickRegister') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::clickRegisterAction',  '_route' => 'vlreleases_projects_clickRegister',);
                }

                // vlreleases_projects_clickRegisterOne
                if ($pathinfo === '/projects/clickRegisterOne') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::clickRegisterOneAction',  '_route' => 'vlreleases_projects_clickRegisterOne',);
                }

            }

            // vlreleases_projects_addProject
            if ($pathinfo === '/projects/addProject') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::addProjectAction',  '_route' => 'vlreleases_projects_addProject',);
            }

            // vlreleases_projects_getCreateProjectData
            if ($pathinfo === '/projects/getCreateProjectData') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getCreateProjectDataAction',  '_route' => 'vlreleases_projects_getCreateProjectData',);
            }

            // vlreleases_projects_listProjects
            if ($pathinfo === '/projects/listProjects') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::listProjectsAction',  '_route' => 'vlreleases_projects_listProjects',);
            }

            if (0 === strpos($pathinfo, '/projects/get')) {
                // vlreleases_projects_getCreateClientData
                if ($pathinfo === '/projects/getCreateClientData') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getCreateClientDataAction',  '_route' => 'vlreleases_projects_getCreateClientData',);
                }

                // vlreleases_projects_getProjectName
                if ($pathinfo === '/projects/getProjectName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::getProjectNameAction',  '_route' => 'vlreleases_projects_getProjectName',);
                }

            }

            // vlreleases_projects_filterBillabilityData
            if ($pathinfo === '/projects/filterBillabilityData') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::filterBillabilityDataAction',  '_route' => 'vlreleases_projects_filterBillabilityData',);
            }

            if (0 === strpos($pathinfo, '/projects/edit')) {
                // vlreleases_projects_editProjectName
                if ($pathinfo === '/projects/editProjectName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::editProjectNameAction',  '_route' => 'vlreleases_projects_editProjectName',);
                }

                // vlreleases_projects_editClientName
                if ($pathinfo === '/projects/editClientName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::editClientNameAction',  '_route' => 'vlreleases_projects_editClientName',);
                }

            }

            if (0 === strpos($pathinfo, '/projects/update')) {
                // vlreleases_projects_updateProjectName
                if ($pathinfo === '/projects/updateProjectName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::updateProjectNameAction',  '_route' => 'vlreleases_projects_updateProjectName',);
                }

                // vlreleases_projects_updateClientName
                if ($pathinfo === '/projects/updateClientName') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::updateClientNameAction',  '_route' => 'vlreleases_projects_updateClientName',);
                }

                // vlreleases_projects_updateStatus
                if ($pathinfo === '/projects/updateStatus') {
                    return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ProjectsController::updateStatusAction',  '_route' => 'vlreleases_projects_updateStatus',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/team')) {
            // vlreleases_team
            if ($pathinfo === '/team/index') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\TeamController::indexAction',  '_route' => 'vlreleases_team',);
            }

            // vlreleases_team_editTeam
            if ($pathinfo === '/team/editTeam') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\TeamController::editTeamAction',  '_route' => 'vlreleases_team_editTeam',);
            }

            // vlreleases_team_getTeam
            if ($pathinfo === '/team/getTeam') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\TeamController::getTeamAction',  '_route' => 'vlreleases_team_getTeam',);
            }

            // vlreleases_team_editAddTeam
            if ($pathinfo === '/team/editAddTeam') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\TeamController::editAddTeamAction',  '_route' => 'vlreleases_team_editAddTeam',);
            }

        }

        if (0 === strpos($pathinfo, '/actions')) {
            // vlreleases_actions
            if ($pathinfo === '/actions/index') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ActionsController::indexAction',  '_route' => 'vlreleases_actions',);
            }

            // vlreleases_actions_getRoleData
            if ($pathinfo === '/actions/getRoleData') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ActionsController::getRoleDataAction',  '_route' => 'vlreleases_actions_getRoleData',);
            }

            // vlreleases_actions_ajaxRoleData
            if ($pathinfo === '/actions/ajaxRoleData') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ActionsController::ajaxRoleDataAction',  '_route' => 'vlreleases_actions_ajaxRoleData',);
            }

        }

        if (0 === strpos($pathinfo, '/holidaysList')) {
            // vlreleases_holidaysList
            if ($pathinfo === '/holidaysList/index') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\HolidaysListController::indexAction',  '_route' => 'vlreleases_holidaysList',);
            }

            // vlreleases_holidaysList_registerHoliday
            if ($pathinfo === '/holidaysList/registerHoliday') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\HolidaysListController::registerHolidayAction',  '_route' => 'vlreleases_holidaysList_registerHoliday',);
            }

            // vlreleases_holidaysList_deleteHoliday
            if ($pathinfo === '/holidaysList/deleteHoliday') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\HolidaysListController::deleteHolidayAction',  '_route' => 'vlreleases_holidaysList_deleteHoliday',);
            }

        }

        if (0 === strpos($pathinfo, '/GroupMails')) {
            // vlreleases_groupMails
            if ($pathinfo === '/GroupMails/index') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::indexAction',  '_route' => 'vlreleases_groupMails',);
            }

            // vlreleases_groupMails_getMailMembers
            if ($pathinfo === '/GroupMails/getMailMembers') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::getMailMembersAction',  '_route' => 'vlreleases_groupMails_getMailMembers',);
            }

            // vlreleases_groupMails_registerGroupMail
            if ($pathinfo === '/GroupMails/registerGroupMail') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::registerGroupMailAction',  '_route' => 'vlreleases_groupMails_registerGroupMail',);
            }

            // vlreleases_groupMails_deleteGroup
            if ($pathinfo === '/GroupMails/deleteGroup') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::deleteGroupAction',  '_route' => 'vlreleases_groupMails_deleteGroup',);
            }

            // vlreleases_groupMails_editGroupEmail
            if ($pathinfo === '/GroupMails/editGroupEmail') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::editGroupEmailAction',  '_route' => 'vlreleases_groupMails_editGroupEmail',);
            }

            // vlreleases_groupMails_updateGroupMail
            if ($pathinfo === '/GroupMails/updateGroupMail') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::updateGroupMailAction',  '_route' => 'vlreleases_groupMails_updateGroupMail',);
            }

            // vlreleases_groupMails_testMail
            if ($pathinfo === '/GroupMails/testMail') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\GroupMailsController::testMailAction',  '_route' => 'vlreleases_groupMails_testMail',);
            }

        }

        if (0 === strpos($pathinfo, '/Resume')) {
            // vlreleases_resume
            if ($pathinfo === '/Resume/index') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ResumeController::indexAction',  '_route' => 'vlreleases_resume',);
            }

            // vlreleases_resume_getUsersOfTeam
            if ($pathinfo === '/Resume/getUsersOfTeam') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ResumeController::getUsersOfTeamAction',  '_route' => 'vlreleases_resume_getUsersOfTeam',);
            }

            // vlreleases_resume_buildResume
            if ($pathinfo === '/Resume/buildResume') {
                return array (  '_controller' => 'Vlreleases\\UserBundle\\Controller\\ResumeController::buildResumeAction',  '_route' => 'vlreleases_resume_buildResume',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
