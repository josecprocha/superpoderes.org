<span
  ng-style="{
            left: 50 + 18 * tile.position.x+'px',
            top:  48 + 24 * tile.position.y+'px',
            'z-index': 2 * tile.position.z + 1,
            cursor: isClickable?'pointer':'auto'
            }"
  class="tile tile-{{tile.tile}}"
  ng-class="{
            clickable:isClickable,
            selected: isSelected}"
  ng-controller="TileController"
  ng-repeat="tile in tiles"
  ng-click="clickTile()">
</span>
