/***************************************************************
 * THANKS
 ***************************************************************
 *
 * Confetti implementation inspired from "CSS Particle Effects"
 * pen by Atticus Koya (https://codepen.io/k-ya/pen/bpxgWZ)
 *
 * ---
 *
 * getWholeChar() function pulled from MDN wiki page for
 * String.prototype.charAt(). Code made available by
 * Mozilla Contributors under public domain.
 * (https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/charAt)
 *
 * ---
 *
 * Icons provided by Font Awesome (v.4.7.0) icon font
 * (http://fontawesome.io/), licensed under SIL OFL 1.1.
 *
 * ---
 *
 * Components developed using the Vue.js framework.
 * (https://vuejs.org/)
 *
 * ---
 *
 * State management implemented using Vuex library.
 * (https://vuex.vuejs.org/en/)
 *
 * ---
 *
 * Page routing implemented using Vue Router.
 * (https://router.vuejs.org/en/)
 *
 */

/***************************************************************
     * INITIAL SETUP
     ***************************************************************/
    document.addEventListener('touchstart', () => {}, true);

    const ROUTES = {
      HOME: '/',
      GAME: '/game' };


    /***************************************************************
                        * COMPONENTS
                        ***************************************************************/
    Vue.component('volume-control', {
      computed: {
        isOn() {
          return !this.$store.state.isMuted;
        },
        classes() {
          return [
          'icon',
          'fa',
          {
            'fa-volume-up': this.isOn,
            'fa-volume-off': !this.isOn }];


        } },

      methods: {
        toggle() {
          this.$store.dispatch({
            type: 'changeVolume',
            volume: this.isOn ? 0 : 1 });

          if (this.isOn) {
            AUDIO.unMute.play();
          }
        } },

      template: `
        <div class="volume-control" v-on:click="toggle">
          <i :class="classes"></i>
        </div>
      ` });


    const BackControl = Vue.component('back-control', {
      computed: {
        classes() {
          return [
          'icon',
          'fa',
          'fa-arrow-left'];

        } },

      methods: {
        goBack() {
          AUDIO.gameExit.play();
          // this.$router.push('/');
          this.$store.dispatch({
            type: 'routeTo',
            route: ROUTES.HOME,
            router: this.$router });

        } },

      template: `
        <div class="back-control" v-on:click="goBack">
          <i :class="classes"></i>
        </div>
      ` });


    const ConfettiCollection = Vue.component('confetti-collection', {
      template: `
        <div class="confetti-root">
          <confetti-piece v-for="n in 100" :key="n"></confetti-piece>
        </div>
      ` });


    const ConfettiPiece = Vue.component('confetti-piece', {
      data() {
        let colors = [
        '#0066cc',
        '#f1a66a',
        'red'];


        let left = Math.random() * 100 - 50 + 'vw';
        let animationDuration = Math.random() * 1500 + 1500 + 'ms';
        let animationDelay = Math.random() * 1000 + 'ms';

        let colorIndex = Math.floor(Math.random() * colors.length);
        let backgroundColor = colors[colorIndex];

        let scale = 0.75 + Math.random() * 0.5;

        return {
          style: {
            animationDelay,
            animationDuration,
            backgroundColor,
            left },

          scaleStyle: {
            transform: `scaleX(${scale}) scaleY(${scale})` } };


      },
      template: `
        <div v-bind:style="scaleStyle">
          <div class="confetti" v-bind:style="style"></div>
        </div>
      ` });


    const Overview = Vue.component('overview', {
      computed: {
        winStatus() {
          const winnerId = this.$store.getters.winner;

          if (winnerId === 0) {
            let firstPlayerName = this.$store.getters.playerName(1);
            let secondPlayerName = this.$store.getters.playerName(2);
            return `${firstPlayerName} & ${secondPlayerName} Tie`;
          } else {
            let winnerName = this.$store.getters.playerName(winnerId);
            return `${winnerName} Wins`;
          }
        },
        isPlaying() {
          return this.$store.getters.winner === null;
        },
        scores() {
          return {
            1: this.$store.state.scores[1],
            2: this.$store.state.scores[2] };

        } },

      template: `
        <div class="overview">
          <template v-if="isPlaying">
            <div class="players">
              <player :player-id="1"></player>
              <player :player-id="2"></player>
            </div>
          </template>
          <template v-else>
            <div class="status">
              {{ winStatus }}
            </div>
          </template>
        </div>
      ` });


    const Player = Vue.component('player', {
      props: {
        playerId: {
          type: Number,
          required: true } },


      computed: {
        isCurrentPlayer() {
          return this.$store.state.currentPlayer === this.playerId;
        },
        score() {
          return this.$store.state.scores[this.playerId];
        },
        name() {
          return this.$store.getters.playerName(this.playerId);
        } },

      template: `
        <div class="player" v-bind:class="{ 'current-player': isCurrentPlayer }">
          <div class="name">{{ name }}</div>
          <div class="score">{{ score }}</div>
        </div>
      ` });


    const Dot = Vue.component('dot', {
      props: {
        col: {
          type: Number,
          required: true },

        row: {
          type: Number,
          required: true } },


      computed: {
        isSelected() {
          return this.$store.getters.isSelectedDot({
            row: this.row, col: this.col });

        },
        isSecondDot() {
          if (!this.$store.state.secondDot) {
            return false;
          }
          const { row, col } = this.$store.state.secondDot;
          return row === this.row && col === this.col;
        } },

      methods: {
        select: function (event) {
          this.$store.dispatch({
            type: 'actOnDot',
            row: this.row,
            col: this.col });

        } },

      data() {
        const startAnimationDelay = 0.25 + .25 * (this.row * this.col) / this.$store.state.maxScore;
        return {
          style: {
            animationDelay: `${startAnimationDelay}s` } };


      },
      template: `
        <div class="dot" v-on:click="select" v-bind:style="style">
          <span v-bind:class="{ 'selected': isSelected, 'second-selected': isSecondDot }"></span>
        </div>
      ` });


    const HLine = Vue.component('h-line', {
      props: {
        row: {
          type: Number,
          required: true },

        leftCol: {
          type: Number,
          required: true },

        rightCol: {
          type: Number,
          required: true } },


      computed: {
        isSelected() {
          return this.$store.getters.isDrawnEdge({
            first: { row: this.row, col: this.leftCol },
            second: { row: this.row, col: this.rightCol } });

        } },

      template: `
        <div class="h-line" v-bind:class="{ 'selected': isSelected }"><span></span></div>
      ` });


    const VLine = Vue.component('v-line', {
      props: {
        col: {
          type: Number,
          required: true },

        topRow: {
          type: Number,
          required: true },

        bottomRow: {
          type: Number,
          required: true } },


      computed: {
        isSelected() {
          return this.$store.getters.isDrawnEdge({
            first: { row: this.topRow, col: this.col },
            second: { row: this.bottomRow, col: this.col } });

        } },

      template: `
        <div class="v-line" v-bind:class="{ 'selected': isSelected }"><span></span></div>
      ` });


    const Cell = Vue.component('cell', {
      props: {
        topRow: {
          type: Number,
          required: true },

        leftCol: {
          type: Number,
          required: true } },


      computed: {
        isFilled() {
          const result = this.$store.getters.isFilledCell({
            topRow: this.topRow,
            leftCol: this.leftCol });

          return result;
        },
        player() {
          let playerId = this.$store.getters.playerAtCell({
            topRow: this.topRow,
            leftCol: this.leftCol });

          return this.$store.getters.playerInitial(playerId);
        } },

      template: `
        <div class="cell" v-bind:class="{ 'filled-cell': isFilled }">
          <div v-if="isFilled" class="player">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <text x="16" y="18" text-anchor="middle" alignment-baseline="middle" font-size="32">{{ player }}</text>
            </svg>
          </div>
        </div>
      ` });


    const DotGraph = Vue.component('dot-graph', {
      props: {
        cols: {
          type: Number,
          required: true },

        rows: {
          type: Number,
          required: true } },


      data() {
        return {
          gameStyle: {
            gridTemplateColumns: `repeat(${this.cols - 1}, 1fr 8fr) 1fr`,
            gridTemplateRows: `repeat(${this.rows - 1}, 1fr 8fr) 1fr` } };


      },
      template: `
        <div class="dot-graph" v-bind:style="gameStyle">
          <template v-for="row in rows">
            <!-- Generate horizontal lines and dots -->
            <template v-for="col in cols">
              <dot :col="col" :row="row"></dot>
              <h-line v-if="col < cols" :row="row" :left-col="col" :right-col="col + 1"></h-line>
            </template>

            <!-- Generate vertical lines and cell spaces -->
            <template v-if="row < rows" v-for="col in cols">
              <v-line :top-row="row" :bottom-row="row + 1" :col="col"></v-line>
              <cell v-if="col < cols" :top-row="row" :left-col="col"></cell>
            </template>
          </template>
        </div>
      ` });


    const DotGame = Vue.component('dot-game', {
      computed: {
        dotCount() {
          return this.$store.state.dotCount;
        },
        isDonePlaying() {
          return this.$store.getters.winner !== null;
        } },

      methods: {
        prepareNewGame() {
          AUDIO.gameExit.play();

          this.$store.dispatch({
            type: 'routeTo',
            route: ROUTES.HOME,
            router: this.$router });

        } },

      template: `
        <div class="dot-game">
          <confetti-collection v-if="isDonePlaying"></confetti-collection>
          <back-control />
          <overview></overview>
          <dot-graph :cols="dotCount" :rows="dotCount"></dot-graph>
        </div>
      ` });


    const ComponentGrid = Vue.component('component-grid', {
      props: {
        cols: {
          type: Number,
          required: true },

        face: {
          type: Function,
          required: true },

        hLine: {
          type: Function,
          required: true },

        node: {
          type: Function,
          required: true },

        rows: {
          type: Number,
          required: true },

        vLine: {
          type: Function,
          required: true } },


      data() {
        return {
          spacingWeight: '2fr',
          nodeWeight: 'minmax(4px, 1fr)' };

      },
      computed: {
        gridStyle() {
          const { nodeWeight, spacingWeight } = this;

          return {
            display: 'grid',
            gridTemplateColumns: `repeat(${this.cols - 1}, ${nodeWeight} ${spacingWeight}) ${nodeWeight}`,
            gridTemplateRows: `repeat(${this.rows - 1}, ${nodeWeight} ${spacingWeight}) ${nodeWeight}`,
            height: '100%',
            width: '100%' };

        } },

      template: `
        <div :style="gridStyle">
          <template v-for="row in rows">
            <!-- Generate horizontal lines and dots -->
            <template v-for="col in cols">
              <component :is="node" :col="col" :row="row" />
              <component :is="hLine" v-if="col < cols" :row="row" :left-col="col" :right-col="col + 1" />
            </template>

            <!-- Generate vertical lines and cell spaces -->
            <template v-if="row < rows" v-for="col in cols">
              <component :is="vLine" :top-row="row" :bottom-row="row + 1" :col="col" />
              <component :is="face" v-if="col < cols" :top-row="row" :left-col="col" />
            </template>
          </template>
        </div>
      ` });


    const Empty = Vue.component('empty', { template: `<div />` });

    const GridIconNode = Vue.component('grid-icon-node', {
      template: `<div class="GridIcon-Node" />` });


    const GridIcon = Vue.component('grid-icon', {
      props: {
        cols: {
          type: Number,
          required: true },

        rows: {
          type: Number,
          required: true } },


      data() {
        return {
          empty: Empty,
          GridIconNode };

      },
      template: `
        <div class="GridIcon">
          <component-grid
            :rows="rows"
            :cols="cols"
            :face="empty"
            :hLine="empty"
            :vLine="empty"
            :node="GridIconNode"
          />
        </div>
      ` });


    const SizeSelect = Vue.component('size-select', {
      props: {
        size: {
          type: Number,
          required: false } },


      methods: {
        update: function ({ target }) {
          AUDIO.uiTap.play();
          this.$emit('change', Number(target.value));
        } },

      template: `
        <div class="size-select">
          <grid-icon :rows="size" :cols="size" />
          <label :class="['size-option', {checked:size === 3}]">
            <input type="radio" :checked="size === 3" name="size" v-on:change="update" value="3" />
            3
          </label>
          <label :class="['size-option', {checked:size === 4}]">
            <input type="radio" :checked="size === 4" name="size" v-on:change="update" value="4" />
            4
          </label>
          <label :class="['size-option', {checked:size === 5}]">
            <input type="radio" :checked="size === 5" name="size" v-on:change="update" value="5" />
            5
          </label>
          <label :class="['size-option', {checked:size === 6}]">
            <input type="radio" :checked="size === 6" name="size" v-on:change="update" value="6" />
            6
          </label>
        </div>
      ` });


    const NewGame = Vue.component('new-game', {
      data() {
        return {
          size: this.$store.state.dotCount };

      },
      computed: {
        player1: function () {return this.$store.getters.playerName(1);},
        player2: function () {return this.$store.getters.playerName(2);} },

      methods: {
        start() {
          AUDIO.gameStart.play();
          // 🐱🐧🐶
          this.$store.dispatch({
            type: 'changeGameSize',
            size: this.size });

          this.$store.dispatch({
            type: 'changePlayerName',
            player: 1,
            name: this.$refs.player1.value || '🐱' });

          this.$store.dispatch({
            type: 'changePlayerName',
            player: 2,
            name: this.$refs.player2.value || '🐶' });

          this.$store.dispatch({
            type: 'routeTo',
            route: ROUTES.GAME,
            router: this.$router });

        },
        updatePlayers() {
          this.$store.dispatch({
            type: 'changePlayerName',
            player: 1,
            name: this.$refs.player1.value });

          this.$store.dispatch({
            type: 'changePlayerName',
            player: 2,
            name: this.$refs.player2.value });

        },
        focus() {
          AUDIO.uiTap.play();
        } },

      template: `
        <div class="new-game">
          <h1>Dots</h1>
          <div class="players">
            <div>
              <i class="fa fa-user"></i>
              <input
                type="text"
                ref="player1"
                :value="player1"
                v-on:change="updatePlayers"
                v-on:focus="focus"
                placeholder="Player 1"
              />
            </div>
            <div>
              <i class="fa fa-user"></i>
              <input
                type="text"
                ref="player2"
                :value="player2"
                v-on:change="updatePlayers"
                v-on:focus="focus"
                placeholder="Player 2"
              />
            </div>
          </div>
          <size-select :size="size" v-on:change="newSize => size = newSize" />
          <button v-on:click="start">Start</button>
        </div>
      ` });


    const AnimatedBackground = Vue.component('animated-background', {
      template: `
        <div class="AnimatedBg">
          <div class="AnimatedBg-Fill"></div>
          <div class="AnimatedBg-Cover"></div>
        </div>
      ` });


    const DotApp = Vue.component('dot-app', {
      template: `
        <div class="container">
          <animated-background />
          <volume-control />
          <router-view />
        </div>
      ` });



    /***************************************************************
             * STATE HELPERS
             ***************************************************************/
    function squareNodeId(row, col) {
      return `r${row}c${col}`;
    }

    function squareEdgeId(squareNodeA, squareNodeB) {
      let first, second;

      if (squareNodeA.col <= squareNodeB.col && squareNodeA.row <= squareNodeB.row) {
        first = squareNodeA;
        second = squareNodeB;
      } else {
        first = squareNodeB;
        second = squareNodeA;
      }

      return `${squareNodeId(first.row, first.col)}-${squareNodeId(second.row, second.col)}`;
    }

    function squareFaceId(nodes) {
      const separator = ',';
      let id = squareEdgeId(nodes[0], nodes[1]) + separator;
      id += squareEdgeId(nodes[1], nodes[2]) + separator;
      id += squareEdgeId(nodes[2], nodes[3]) + separator;
      id += squareEdgeId(nodes[3], nodes[0]);

      return id;
    }

    function squareGraphEdges(size) {
      const edges = {};

      for (let row = 1; row <= size; row++) {
        for (let col = 1; col <= size; col++) {
          if (col < size) {
            const horizontalEdgeId = squareEdgeId({ row, col }, { row, col: col + 1 });
            edges[horizontalEdgeId] = false;
          }

          if (row < size) {
            const verticalEdgeId = squareEdgeId({ row, col }, { row: row + 1, col });
            edges[verticalEdgeId] = false;
          }
        }
      }

      return edges;
    }

    function squareGraphFaces(size) {
      let faces = {};

      for (let row = 1; row < size; row++) {
        for (let col = 1; col < size; col++) {
          const faceId = squareFaceId([
          { row, col },
          { row, col: col + 1 },
          { row: row + 1, col: col + 1 },
          { row: row + 1, col }]);


          faces[faceId] = 0; // No player at face
        }
      }

      return faces;
    }

    function adjacentSquareFacesOfEdge(nodeA, nodeB, dotCount) {
      const faces = [];

      if (nodeA.row === nodeB.row) {
        // Horizontal edge
        let topRow = nodeA.row - 1;
        let leftCol = Math.min(nodeA.col, nodeB.col);

        // Face above edge
        if (topRow > 0) {
          faces.push([
          { row: topRow, col: leftCol },
          { row: topRow, col: leftCol + 1 },
          { row: topRow + 1, col: leftCol + 1 },
          { row: topRow + 1, col: leftCol }]);

        }
        // Face below edge
        if (topRow <= dotCount) {
          faces.push([
          { row: topRow + 1, col: leftCol },
          { row: topRow + 1, col: leftCol + 1 },
          { row: topRow + 2, col: leftCol + 1 },
          { row: topRow + 2, col: leftCol }]);

        }
      } else {
        // Vertical edge
        let topRow = Math.min(nodeA.row, nodeB.row);
        let leftCol = nodeA.col - 1;

        // Face left of edge
        if (leftCol > 0) {
          faces.push([
          { row: topRow, col: leftCol },
          { row: topRow, col: leftCol + 1 },
          { row: topRow + 1, col: leftCol + 1 },
          { row: topRow + 1, col: leftCol }]);

        }

        // Face right of edge
        if (leftCol <= dotCount) {
          faces.push([
          { row: topRow, col: leftCol + 1 },
          { row: topRow, col: leftCol + 2 },
          { row: topRow + 1, col: leftCol + 2 },
          { row: topRow + 1, col: leftCol + 1 }]);

        }
      }

      return faces;
    }

    function isAdjacent(first, second) {
      return first.row === second.row && (first.col === second.col - 1 || first.col === second.col + 1) ||
      first.col === second.col && (first.row === second.row - 1 || first.row === second.row + 1);
    }

    /*
       * Source:  MDN
       *   https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/charAt
       */
    function getWholeChar(str, i) {
      var code = str.charCodeAt(i);

      if (Number.isNaN(code)) {
        return ''; // Position not found
      }
      if (code < 0xD800 || code > 0xDFFF) {
        return str.charAt(i);
      }

      // High surrogate (could change last hex to 0xDB7F to treat high private
      // surrogates as single characters)
      if (0xD800 <= code && code <= 0xDBFF) {
        if (str.length <= i + 1) {
          throw 'High surrogate without following low surrogate';
        }
        var next = str.charCodeAt(i + 1);
        if (0xDC00 > next || next > 0xDFFF) {
          throw 'High surrogate without following low surrogate';
        }
        return str.charAt(i) + str.charAt(i + 1);
      }
      // Low surrogate (0xDC00 <= code && code <= 0xDFFF)
      if (i === 0) {
        throw 'Low surrogate without preceding high surrogate';
      }
      var prev = str.charCodeAt(i - 1);

      // (could change last hex to 0xDB7F to treat high private
      // surrogates as single characters)
      if (0xD800 > prev || prev > 0xDBFF) {
        throw 'Low surrogate without preceding high surrogate';
      }
      // We can pass over low surrogates now as the second component
      // in a pair which we have already processed
      return false;
    }

    function initialState() {
      const INITIAL_DOT_COUNT = 4;

      return {
        dotCount: INITIAL_DOT_COUNT,
        firstDot: null,
        secondDot: null,
        edges: squareGraphEdges(INITIAL_DOT_COUNT),
        faces: squareGraphFaces(INITIAL_DOT_COUNT),
        currentPlayer: 1,
        maxScore: Math.pow(INITIAL_DOT_COUNT - 1, 2),
        scores: { 1: 0, 2: 0 },
        playerNames: { 1: '', 2: '' },
        isMuted: false };

    }


    /***************************************************************
       * STATE STORE
       ***************************************************************/
    const store = new Vuex.Store({
      state: initialState(),
      getters: {
        isSelectedDot(state) {
          return ({ row, col }) =>
          state.firstDot &&
          state.firstDot.row === row &&
          state.firstDot.col === col;

        },
        isDrawnEdge(state) {
          return ({ first, second }) => state.edges[squareEdgeId(first, second)];
        },
        isFilledCell(state, getters) {
          return ({ topRow, leftCol }) => {
            return getters.playerAtCell({ topRow, leftCol }) > 0;
          };
        },
        playerAtCell(state) {
          return ({ topRow, leftCol }) => {
            const nodes = [
            { row: topRow, col: leftCol },
            { row: topRow, col: leftCol + 1 },
            { row: topRow + 1, col: leftCol + 1 },
            { row: topRow + 1, col: leftCol }];

            return state.faces[squareFaceId(nodes)];
          };
        },
        playerName(state) {
          return playerId => state.playerNames[playerId];
        },
        playerInitial(state) {
          return playerId => getWholeChar(state.playerNames[playerId], 0);
        },
        winner(state) {
          if (state.scores[1] + state.scores[2] === state.maxScore) {
            if (state.scores[1] > state.scores[2]) {
              return 1;
            } else if (state.scores[1] < state.scores[2]) {
              return 2;
            } else {
              return 0;
            }
          } else {
            return null;
          }
        } },

      actions: {
        actOnDot({ commit, state, getters }, dot) {
          const dotCount = state.dotCount;

          if (state.firstDot) {
            const firstDot = state.firstDot;
            const secondDot = dot;
            if (firstDot.row === secondDot.row && firstDot.col === secondDot.col) {
              commit('resetFirstDot');
            } else if (isAdjacent(firstDot, secondDot) &&
            !getters.isDrawnEdge({ first: firstDot, second: secondDot }))
            {
              let hasFilledNewCell = false;

              commit('setSecondDot', secondDot);
              commit('selectEdge', { firstDot, secondDot });
              adjacentSquareFacesOfEdge(firstDot, secondDot, dotCount).forEach(nodes => {
                if (
                getters.isDrawnEdge({ first: nodes[0], second: nodes[1] }) &&
                getters.isDrawnEdge({ first: nodes[1], second: nodes[2] }) &&
                getters.isDrawnEdge({ first: nodes[2], second: nodes[3] }) &&
                getters.isDrawnEdge({ first: nodes[3], second: nodes[0] }))
                {
                  hasFilledNewCell = true;
                  commit('selectFace', nodes);
                  commit('incrementPlayerScore', state.currentPlayer);
                }
              });
              commit('resetFirstDot');
              if (!hasFilledNewCell) {
                commit('toggleCurrentPlayer');
              }
            } else {
              commit('resetFirstDot');
              commit('setFirstDot', secondDot);
            }
          } else {
            commit('setFirstDot', dot);
          }
        },
        changePlayerName({ commit }, { player, name }) {
          commit('changePlayerName', { player, name });
        },
        changeGameSize({ commit }, { size }) {
          commit('changeGameSize', { size });
        },
        changeVolume({ commit }, { volume }) {
          commit('changeVolume', { volume });
        },
        routeTo({ commit }, { router, route }) {
          router.push(route);

          switch (route) {
            case ROUTES.HOME:
              commit('clearGame');
              break;
            case ROUTES.GAME:
              break;}

        } },

      mutations: {
        setFirstDot(state, { row, col }) {
          AUDIO.edgeStart.play();
          state.firstDot = { row, col };
          state.secondDot = null;
        },
        setSecondDot(state, { row, col }) {
          state.secondDot = { row, col };
        },
        resetFirstDot(state) {
          AUDIO.edgeReset.play();
          state.firstDot = null;
        },
        selectEdge(state, { firstDot, secondDot }) {
          AUDIO.edgeEnd.play();
          Vue.set(state.edges, squareEdgeId(firstDot, secondDot), true);
        },
        selectFace(state, nodes) {
          AUDIO.success.play();
          Vue.set(state.faces, squareFaceId(nodes), state.currentPlayer);
        },
        incrementPlayerScore(state, player) {
          Vue.set(state.scores, player, state.scores[player] + 1);
        },
        toggleCurrentPlayer(state) {
          if (state.currentPlayer === 1) {
            state.currentPlayer = 2;
          } else {
            state.currentPlayer = 1;
          }
        },
        changePlayerName(state, { player, name }) {
          state.playerNames[player] = name;
        },
        clearGame(state) {
          const { dotCount, playerNames, isMuted } = state;

          Object.assign(state, {
            ...initialState(),
            dotCount,
            isMuted,
            playerNames });

        },
        changeGameSize(state, { size }) {
          state.dotCount = size;
          state.edges = squareGraphEdges(size);
          state.faces = squareGraphFaces(size);
          state.maxScore = Math.pow(size - 1, 2);
        },
        changeVolume(state, { volume }) {
          state.isMuted = volume === 0;
        } } });



    const routes = [
    { path: '/', component: NewGame },
    { path: '/game', component: DotGame }];


    let router = new VueRouter({ routes });

    new Vue({
      store,
      router,
      template: `
        <dot-app></dot-app>
      ` }).
    $mount('#app');


    /***************************************************************
                     * AUDIO
                     ***************************************************************/
    class Sound {
      constructor(audioContext, isMuted) {
        this.audioContext = audioContext;
        this.audioBuffer = undefined;
        this.isMuted = isMuted;
      }

      onLoad(request) {
        this.audioContext.decodeAudioData(
        request.response,
        buffer => this.audioBuffer = buffer);

      }

      load(url) {
        const request = new XMLHttpRequest();
        request.open('GET', url, true);
        request.responseType = 'arraybuffer';
        request.onload = () => {if (request.status === 200) {this.onLoad(request);}};
        request.send();

        return this;
      }

      play() {
        if (isMuted()) {
          return;
        }

        if (this.audioBuffer) {
          const source = this.audioContext.createBufferSource();
          source.buffer = this.audioBuffer;
          source.connect(this.audioContext.destination);
          source.start(0, 0);
        }
      }}


    const AUDIO_CONTEXT = new (window.AudioContext || window.webkitAudioContext)();
    const isMuted = () => store.state.isMuted;

    const collect = new Sound(AUDIO_CONTEXT, isMuted).load('https://s3-us-west-2.amazonaws.com/s.cdpn.io/928004/collect.mp3');
    const tap = new Sound(AUDIO_CONTEXT, isMuted).load('https://s3-us-west-2.amazonaws.com/s.cdpn.io/928004/tap-1.mp3');

    const AUDIO = {
      collect,
      tap,
      uiTap: tap,
      gameExit: collect,
      gameStart: collect,
      success: collect,
      edgeStart: tap,
      edgeReset: tap,
      edgeEnd: tap,
      unMute: tap };



    /***************************************************************
                      * THANKS FOR PLAYING!
                      ***************************************************************
                      * ░░░░░░░░░░░░░░░░░░░░░
                      * ░░░░░░▄▀▀▄▀▀▄░░░░░░░░
                      * ░░░░░█▒▄░▄░░▒█▄▄▄░░░░
                      * ░░░▄▄█░▀░▀░░░█▄▓▓█░░░
                      * ░▄▀▒▒▒▀▄▀▄▄▄▀▒▒▀█▓▄░░░
                      * ▄▀▀▒▀▒▒▒▒▒░░░▒▒▒█▓▓█░░░
                      * █▒▒▒▒▒▒▒▒▄░░░░▒▒██▀░░░░
                      * ▀▄▒▒▒▒▒▒▒█▀░░▒▄█▄▀░░░░░
                      * ░░▀▀▄▄▄▄█▄░░▒▒▀▄█▄▄░░░
                      */
