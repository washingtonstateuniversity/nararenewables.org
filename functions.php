<?php

add_filter( 'wsuwp_uc_people_to_add_to_content', 'nara_modify_uc_object_people_content', 10, 1 );
/**
 * Stops the display of associated people at the bottom of Team (Project) pages
 * by default.
 *
 * @param $people
 *
 * @return bool
 */
function nara_modify_uc_object_people_content( $people ) {
	if ( is_singular( wsuwp_uc_get_object_type_slug( 'project' ) ) ) {
		return false;
	}

	return $people;
}
