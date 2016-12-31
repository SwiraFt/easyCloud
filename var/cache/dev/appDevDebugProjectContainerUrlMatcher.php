<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // e_ceasy_cloud_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'e_ceasy_cloud_default');
            }

            return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\DefaultController::indexAction',  '_route' => 'e_ceasy_cloud_default',);
        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // e_ceasy_cloud_inscription
            if ($pathinfo === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_e_ceasy_cloud_inscription;
                }

                return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\inscriptionController::indexAction',  '_route' => 'e_ceasy_cloud_inscription',);
            }
            not_e_ceasy_cloud_inscription:

            // e_ceasy_cloud_inscriptionPost
            if ($pathinfo === '/inscription') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_e_ceasy_cloud_inscriptionPost;
                }

                return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\UserController::ajoutUtilisateurAction',  '_route' => 'e_ceasy_cloud_inscriptionPost',);
            }
            not_e_ceasy_cloud_inscriptionPost:

        }

        // e_ceasy_cloud_authentification
        if ($pathinfo === '/authentification') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_e_ceasy_cloud_authentification;
            }

            return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\UserController::authentificationUtilisateurAction',  '_route' => 'e_ceasy_cloud_authentification',);
        }
        not_e_ceasy_cloud_authentification:

        // e_ceasy_cloud_repertoire
        if ($pathinfo === '/repertoire') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_e_ceasy_cloud_repertoire;
            }

            return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\RepertoireController::afficherRepertoireAction',  '_route' => 'e_ceasy_cloud_repertoire',);
        }
        not_e_ceasy_cloud_repertoire:

        // e_ceasy_cloud_telecharger
        if (0 === strpos($pathinfo, '/telecharger') && preg_match('#^/telecharger/(?P<fichier>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_e_ceasy_cloud_telecharger;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_ceasy_cloud_telecharger')), array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\RepertoireController::telechargerFichierAction',));
        }
        not_e_ceasy_cloud_telecharger:

        // e_ceasy_cloud_upload
        if ($pathinfo === '/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_e_ceasy_cloud_upload;
            }

            return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\RepertoireController::televerserFichierAction',  '_route' => 'e_ceasy_cloud_upload',);
        }
        not_e_ceasy_cloud_upload:

        // e_ceasy_cloud_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<fichier>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_e_ceasy_cloud_supprimer;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'e_ceasy_cloud_supprimer')), array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\RepertoireController::supprimerFichierAction',));
        }
        not_e_ceasy_cloud_supprimer:

        // e_ceasy_cloud_deco
        if ($pathinfo === '/deconnexion') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_e_ceasy_cloud_deco;
            }

            return array (  '_controller' => 'EC\\easyCloudBundle\\Controller\\UserController::deconnexionAction',  '_route' => 'e_ceasy_cloud_deco',);
        }
        not_e_ceasy_cloud_deco:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
